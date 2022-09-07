/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'nw-primary': {
          100: '#cffafe',
          200: '#a2fffc',
          300: '#77e8f9',
          400: '#22d33e',
          500: '#06b6d4',
          600: '#0891b2',
          700: '#052453',
          800: '#155e75',
          900: '#164e63',
        },
        'nwnav': '#539bfd',
      },
    },
  },
  plugins: [],
}
