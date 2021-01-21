
module.exports = {
    purge: {
        content: [
            './resources/**/*.antlers.html',
            './resources/**/*.blade.php',
            './content/**/*.md'
        ]
    },
    important: true,
    theme: {
        colors: {
            brand: "#00b5fa",
            secondary: "#071323",
            //     light: "#334f74",
            //     DEFAULT: "#0b2b48",
            //     dark: "#020810",
            // },
            navydark: "#07111f",
            grey: {
                lighter: "#e8e8e8",
                light: "#f5f5f5",
                DEFAULT: "#999999",
                dark: "#999999",
            },
            green: "#33b55f",
            sea: "#3b87a4",
        },
        fontFamily: {
            'primary': ['Open Sans','Helvetica','Arial','sans-serif'],
            'secondary': ['sofia-pro','Open Sans','Helvetica','Arial','sans-serif'],
        },
        fontSize: {
            sm: ['14px', '20px'],
            base: ['16px', '24px'],
            lg: ['20px', '28px'],
            xl: ['24px', '32px'],
        }
    },
    variants: {
        margin: ['hover'],
        textColor: ['responsive', 'hover', 'focus', 'group-hover'],
        transform: ['responsive', 'hover', 'focus', 'group-hover'],
        rotate: ['responsive', 'hover', 'focus', 'group-hover'],
    },
    plugins: [],
}

//Open Sans,Helvetica,Arial,sans-serif
