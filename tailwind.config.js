/** @type {import('tailwindcss').Config} */

module.exports = {
  darkMode:'class',
  content: [
    './storage/framework/views/*.php',
    '.resources/**/*.blade.php',
    '.resources/**/*.js',
    '.resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [require("./plugin")],
}
