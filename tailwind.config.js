module.exports = {
  purge: {
    content: ['./public/*.html'],
    options: {
      whitelist: []
    }
  },
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
    },
    extend: {}
  },
  variants: {
    fill: ['responsive','hover','focus']
  },
  plugins: [],
}
