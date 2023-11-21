from flask import Flask, render_template, request
import pandas as pd
import pickle
import numpy as np
import warnings
warnings.filterwarnings('ignore', category=UserWarning, module='sklearn')


df = pd.read_csv('clean_data.csv')
pipe = pickle.load(open('LRegressionModel.pkl', 'rb'))
app = Flask(__name__)

@app.route('/')
def index():
    unique_model = sorted(df['name'].unique())
    company = sorted(df['company'].unique())
    year = sorted(df['year'].unique(), reverse= True)
    type = df['fuel_type'].unique()
    company.insert(0,'Select Company')
    return render_template('index.html', companies = company, models = unique_model, years = year, fuel_types = type)


@app.route('/predict', methods = ['POST'])
def predict():

    company = request.form.get('company')
    selected_model = request.form.get('model')
    year = int(request.form.get('year'))
    type = request.form.get('fuel_type')
    kilo = int(request.form.get('kilo_driven'))
    prediction = pipe.predict(pd.DataFrame([[ selected_model,company, year, kilo , type]], columns = ['name', 'company', 'year', 'kms_driven' ,'fuel_type']))
    return str(np.round(prediction[0],0))

if __name__ == '__main__':
    app.run(debug=True)