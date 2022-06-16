const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
      theme: {

          extends: {
        },
        fontFamily :{
            open : ['Open Sans', 'sans-serif'],
        }
    },
      plugins: [
        // ...
        require('@tailwindcss/forms'),
      ],
    }
