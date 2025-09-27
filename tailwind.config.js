module.exports = {
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  darkMode: 'class', // Enable dark mode
  theme: {
    extend: {
      colors: {
        primary: '#add8e6', // Light blue primary
        black: '#000000',
        darkGray: '#333333',
        neonCyan: '#00ffff', // Neon cyan accent
        secondary: '#2d3748', // Keep for compatibility
        accent: '#4a5568', // Keep for compatibility
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'], // Body font
        heading: ['Orbitron', 'sans-serif'], // Futuristic headings
        body: ['Poppins', 'sans-serif'], // Alternative body
      },
      screens: {
        'xs': '480px', // Custom breakpoint
      },
      animation: {
        'glow': 'glow 2s ease-in-out infinite alternate',
      },
      keyframes: {
        glow: {
          '0%': { boxShadow: '0 0 5px #00ffff' },
          '100%': { boxShadow: '0 0 20px #00ffff, 0 0 30px #00ffff' },
        },
      },
    },
  },
  variants: {
    extend: {
      opacity: ['disabled'], // Enable opacity for disabled elements
    },
  },
  plugins: [],
}
