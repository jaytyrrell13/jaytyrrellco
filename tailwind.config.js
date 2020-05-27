module.exports = {
  theme: {
    colors: {
      white: '#FFF',
      transparent: 'transparent',

      // Primary
      blue: {
        "050": "#DCEEFB",
        "100": "#B6E0FE",
        "200": "#84C5F4",
        "300": "#62B0E8",
        "400": "#4098D7",
        "500": "#2680C2",
        "600": "#186FAF",
        "700": "#0F609B",
        "800": "#0A558C",
        "900": "#003E6B",
      },
      // Neutrals
      gray: {
        "050": "#F0F4F8",
        "100": "#D9E2EC",
        "200": "#BCCCDC",
        "300": "#9FB3C8",
        "400": "#829AB1",
        "500": "#627D98",
        "600": "#486581",
        "700": "#334E68",
        "800": "#243B53",
        "900": "#102A43",
      },
      // Supporting
      teal: {
        "050": "#F0FCF9",
        "100": "#C6F7E9",
        "200": "#8EEDD1",
        "300": "#5FE3C0",
        "400": "#2DCCA7",
        "500": "#17B897",
        "600": "#079A82",
        "700": "#048271",
        "800": "#016457",
        "900": "#004440",
      },
      red: {
        "050": "#FFEEEE",
        "100": "#FACDCD",
        "200": "#F29B9B",
        "300": "#E66A6A",
        "400": "#D64545",
        "500": "#BA2525",
        "600": "#A61B1B",
        "700": "#911111",
        "800": "#780A0A",
        "900": "#610404",
      },
      yellow: {
        "050": "#FFFAEB",
        "100": "#FCEFC7",
        "200": "#F8E3A3",
        "300": "#F9DA8B",
        "400": "#F7D070",
        "500": "#E9B949",
        "600": "#C99A2E",
        "700": "#A27C1A",
        "800": "#7C5E10",
        "900": "#513C06",
      }
    },
    extend: {
      fontFamily: {
        sans: [
          'Nunito Sans'
        ],
        mono: [
          'monospace',
        ],
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        none: 'none',
        '7xl': '80rem',
        '8xl': '88rem'
      },
      spacing: {
        '7': '1.75rem',
        '9': '2.25rem'
      },
      boxShadow: {
        'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      }
    },
    fontSize: {
      'xs': '.8rem',
      'sm': '.925rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidth: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus']
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    }
  ],
  purge: false
}
