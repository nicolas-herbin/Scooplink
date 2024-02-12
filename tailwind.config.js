/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html',
    './html/contact.html'],
  theme: {
    extend: {
      colors: {
        customPink: '#ff66c4',
        customDarkGray: '#343434',
        customLightGray: '#8d8a85',
        customBlue: '#0097b2',
      },
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],
        'dmsans': ['DM+Sans', 'sans-serif']
      }
    },
  },
  plugins: [],
}

