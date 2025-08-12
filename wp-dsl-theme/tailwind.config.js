/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './templates/**/*.php',
    './inc/**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: [
          'Inter',
          'ui-sans-serif', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'
        ],
        heading: [
          'Roboto Slab', 'Inter', 'ui-serif', 'Georgia', 'Cambria', 'Times New Roman', 'Times', 'serif'
        ],
      },
      container: {
        center: true,
        padding: {
          DEFAULT: '1rem',
          sm: '1rem',
          lg: '2rem',
          xl: '2rem',
          '2xl': '2.5rem',
        },
      },
    },
  },
  plugins: [],
};