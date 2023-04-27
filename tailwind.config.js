/** @type {import('tailwindcss').Config} */
module.exports = {
	mode: "jit",
	content: [
		"./index.php",
		"./single.php",
		"./header.php",
		"./footer.php",
		"./functions.php",
		"./page-templates/**/*.php",
		"./template-parts/**/*.php",
		"./components/**/*.php",
		"./src/ts/**/*.ts"
	],
	theme: {
		extend: {
			transitionDelay: {
				'0': '0ms',
				'2000': '2000ms',
			},
			boxShadow: {
				'glow': '0 .15rem 1rem',
				'glow-lg': '0 .25rem 1.5rem',
				'glow-xl': '0 .25rem 2.25rem',
				'glow-sm': '0 0 .75rem'
			},
			fontSize: {
				'base': ['1rem', '1.625rem'],
				'2xs': '0.5rem',
				'5xl': ['2.625rem', '3.125rem'],
				'6xl': ['3.25rem', '3.75rem']
			},
			animation: {
				'bounce-rotated': 'bounce-rotated 1s infinite'
			},
			keyframes: {
				'bounce-rotated': {
					'0%, 100%': {
						top: '0',
						'animation-timing-function': 'cubic-bezier(0.8, 0, 1, 1)'
					},
					'50%': {
						top: '5px',
						'animation-timing-function': 'cubic-bezier(0, 0, 0.2, 1)'
					}
				}
			}
		},
		fontFamily: {
			'heading': ['Figtree', 'sans-serif']
		},
		screens: {
			xs: "576px",
			sm: "768px",
			md: "992px",
			lg: "1200px",
			xl: "1440px",
			"2xl": "1600px",
		},
		container: {
			screens: {
				lg: "1440px",
			},
		},
		colors: {
			primary: "#fa8831",
			"primary-dark": "#C8651A",
			'primary-l': '#fdd4b5',
			secondary: "#1c47b0",
			"d-blue": "#00010d",
			'l-blue': '#7791d0',
			white: "#fefefe",
			text: "#081e22",
			"l-gray": "#b0b0b0",
			gray: "#7a7a7a",
			"d-gray": '#515151',
			dark: "#1f1f1f",
			current: "currentColor",
			black: "#010101",
			transparent: "transparent",
			"gradient-dark": "#00010F",
			"gradient-dark-light": "#00011A",
			"secondary-l": "#007bff"
		},
	},
	plugins: [
		require('@tailwindcss/typography'),
		require("tailwindcss-animation-delay"),
		require("@tailwindcss/container-queries"),
	],
};
