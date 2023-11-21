# Car Price Prediction

![Alt](https://i.insider.com/5eac3e4248d92c0bf849a878?width=1200&format=jpeg)

## Overview

This project aims to predict car prices based on various features such as the car model, company, manufacturing year, kilometers driven, and fuel type. The prediction is powered by a machine learning model, particularly a Linear Regression model, integrated into a Flask web application. Users can input specific details about a car, and the application will provide an estimated price prediction.

## Dataset

The project utilizes a car dataset containing information about different car models, companies, manufacturing years, kilometers driven, and fuel types. The dataset undergoes thorough cleaning and preprocessing to ensure the quality and reliability of the machine learning model.

## Data Cleaning and Preprocessing

The dataset undergoes a comprehensive cleaning process, handling missing values, converting data types, and addressing outliers. Categorical variables are one-hot encoded, and the dataset is split into training and testing sets. The preprocessing steps are encapsulated in a Scikit-Learn pipeline, ensuring consistency and reproducibility.

## Machine Learning Model

The core of the project is a Linear Regression model, implemented using Scikit-Learn. The model is trained on the cleaned dataset, providing accurate predictions for car prices. The model is saved using the Pickle library for easy integration into the Flask web application.

## Flask Web Application

The car price prediction model is deployed as a Flask web application. Users can access a user-friendly interface where they input details about a car, including the model, company, manufacturing year, kilometers driven, and fuel type. The Flask application processes the input and returns an estimated price prediction.

## Usage

To use the application, follow these steps:

1. Install the required dependencies using `requirements.txt`.
2. Run the Flask application (`app.py`).
3. Access the application through a web browser.
4. Input the car details and receive the estimated price prediction.

Feel free to explore the code, contribute, and adapt the project to your specific needs. If you encounter issues or have suggestions for improvement, please open an issue or submit a pull request.

## Acknowledgments

This project was developed as part of a machine learning and web development learning journey. Special thanks to the online learning community and resources that provided valuable insights and guidance.

Best Of Luck to all of You !
