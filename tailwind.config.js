
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
            secondary: "#0b2b48",
            //     light: "#334f74",
            //     DEFAULT: "#0b2b48",
            //     dark: "#020810",
            // },
            navydark: "#07111f",
            grey: {
                light: "#f5f5f5",
                DEFAULT: "#999999",
                dark: "#555555",
            },
            green: "#33b55f",
            sea: "#3b87a4",
        },
        fontFamily: {
            'primary': ['Open Sans ','Helvetica','Arial','sans-serif'],
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
    },
    plugins: [],
}

//Open Sans,Helvetica,Arial,sans-serif
