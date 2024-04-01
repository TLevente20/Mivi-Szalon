/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'poppins': ['Poppins'],
      },
      colors: {
        'my-gray' : {
          50 : '#CCCCCC',
          100 : '#C0C0C0',
          200 : '#B3B3B3'
        },
        'my-black' : {
          100 : '#474448'
        },
        'my-white' : {
          100 : '#F8F9FA',
          200 : '#E9ECEF',
          300 : '#F4F5F6',
          400 : '#DEE2E6',
          500 : '#CED4DA'
        },
        'my-pink' : {
          100 : '#FF8FAB',
          200 : '#FF6B90'
        }
      }
    },
  },
  plugins: [],
}

