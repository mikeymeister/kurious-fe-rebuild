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
    extend: {
      inset: {
        '-4': '-1rem',
      },
    }
  },
  variants: {
  },
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
