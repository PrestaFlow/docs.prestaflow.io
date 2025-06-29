// uncomment to define custom primary color
//const colors = require('tailwindcss/colors');

module.exports = {
  //presets: [
  //  require('./themes/docs/tailwind.preset.js')
  //],
  content: [
    './layouts/**/*.html.twig',
    './themes/**/layouts/**/*.html.twig',
    'node_modules/preline/dist/*.js',
  ],
  plugins: [
    require('preline/plugin'),
  ],
  darkMode: 'class',
  // uncomment to define custom colors
  /*theme: {
    extend: {
      // https://tailwindcss.com/docs/customizing-colors
      colors: {
        primary: colors.blue,
        secondary: colors.slate,
      },
    },
  }*/
}
