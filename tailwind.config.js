import preset from './vendor/filament/support/tailwind.config.preset'

export default {
  presets: [preset],
  theme: {
    extend: {
      colors: {
        'primary': {
          DEFAULT: 'rgba(245, 158, 11, <alpha-value>)',
          50: 'rgba(var(--primary-50), <alpha-value>)',
          100: 'rgba(var(--primary-100), <alpha-value>)',
          200: 'rgba(var(--primary-200), <alpha-value>)',
          300: 'rgba(var(--primary-300), <alpha-value>)',
          400: 'rgba(var(--primary-400), <alpha-value>)',
          500: 'rgba(var(--primary-500), <alpha-value>)',
          600: 'rgba(var(--primary-600), <alpha-value>)',
          700: 'rgba(var(--primary-700), <alpha-value>)',
          800: 'rgba(var(--primary-800), <alpha-value>)',
          900: 'rgba(var(--primary-900), <alpha-value>)',
          950: 'rgba(var(--primary-950), <alpha-value>)',
        },
        'body-color': 'rgba(99, 115, 129, <alpha-value>)',
        'body-secondary': 'rgba(136, 153, 168, <alpha-value>)',
        'dark': {
          DEFAULT: 'rgba(17, 25, 40, <alpha-value>)',
          2: 'rgb(31, 42, 55, <alpha-value>)',
          3: 'rgba(55, 65, 81, <alpha-value>)',
          6: 'rgba(156, 163, 175, <alpha-value>)',
          700: "#090e34b3"
        },
        'gray': {
          1: 'rgb(249, 250, 251, <alpha-value>)'
        }
      },
    },
  },
  content: [
    './app/Filament/**/*.php',
    './resources/views/filament/**/*.blade.php',
    './resources/views/**/*.blade.php',
    './vendor/filament/**/*.blade.php',
  ],
}