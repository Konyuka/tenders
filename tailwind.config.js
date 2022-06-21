const defaultTheme = require('tailwindcss/defaultTheme');
// const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'heading-font': ['Titillium Web', 'cursive'],
                'primary-font': ['Dosis', 'cursive'],
                'bold-font': ['Alegreya Sans SC', 'cursive']
            },
            // colors: {
            //     teal: colors.teal,
            //     cyan: colors.cyan,
            // },
            keyframes: {
                wiggle: {
                    '0%, 100%': {
                        transform: 'rotate(-0.3deg)'
                    },
                    '50%': {
                        transform: 'rotate(0.3deg)'
                    },
                }
            },
            animation: {
                bounceslow: 'spin 1s linear infinite',
                fade: 'fadeOut 5s ease-in-out',
                wiggle: 'wiggle 1s ease-in-out infinite',
            }
        },
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        translate: ({ after }) => after(['group-hover']),
        extend: {
            animation: ['hover', 'focus', 'active', "group-hover", 'motion-safe', 'motion-reduce'],
            translate: ['responsive', 'hover', 'focus', "group-hover"],
            backgroundBlendMode: ['hover', 'focus', "group-hover"],
            display: ["responsive", "group-hover", "group-focus"],
            transitionDuration: ['hover', 'focus'],
        }
    },

    plugins: [
        require('@tailwindcss/ui'),
        require("tailwind-gradient-mask-image")
        // require('@tailwindcss/forms'),
        // require('@tailwindcss/aspect-ratio')
    ],
};
