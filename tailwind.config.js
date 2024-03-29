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
          100 : '#C0C0C0'
        },
        'my-black' : {
          100 : '#474448'
        },
        'my-white' : {
          100 : '#F8F9FA',
          200 : '#E9ECEF',
          300 : '#DEE2E6',
          400 : '#CED4DA'
        },
        'my-pink' : {
          100 : '#FF8FAB'
        }
      }
    },
  },
  plugins: [],
}

