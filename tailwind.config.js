module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      backgroundColor:(theme)=>({
          ...theme('colors'),
          'primary':'#1f2937'
      }),
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
