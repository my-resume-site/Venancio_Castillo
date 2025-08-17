module.exports = {
  content: [
    './source/**/*.blade.php',
    './source/**/*.html',
    './source/**/*.md',
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        brand: {
          500: '#6366F1',
          600: '#4F46E5'
        }
      }
    }
  },
  plugins: []
}