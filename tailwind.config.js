/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: {
      margin: {
        '-1px': '-1px',
        '-3px': '-3px',
        '-15px': '-15px',
      }
    },
  },
  plugins: [],
}