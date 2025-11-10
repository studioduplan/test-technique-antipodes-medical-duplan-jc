module.exports = {
  content: [
    // https://tailwindcss.com/docs/content-configuration
    "./*.php",
    "./**/*.php",
  ],
  theme: {
    extend: {
      screens: {
        sm: "640px",
        // => @media (min-width: 640px) { ... }

        md: "768px",
        // => @media (min-width: 768px) { ... }

        lg: "1024px",
        // => @media (min-width: 1024px) { ... }

        xl: "1280px",
        // => @media (min-width: 1280px) { ... }

        laptop: "1281px",
        // => @media (min-width: 1281px) { ... }

        "2xl": "1425px",
        // => @media (min-width: 1425px) { ... }
      },
      fontFamily: {
        poppins: ['"Poppins"', "sans-serif"],
        montserrat: ['"Montserrat"', "sans-serif"],
      },
      fontSize: {
        none: "0",
        big_title: "4rem",
        title: "3.438rem",
        word: "10rem",
      },
      lineHeight: {
        big: "1.15",
      },
      colors: {
        custom_blue: "#09245C",
      },
      boxShadow: {
        custom: "0 10px 40px -5px rgba(0, 10, 7, 0.25)",
      },
      borderRadius: {
        "4xl": "40px",
      },
      transitionTimingFunction: {
        css: "ease",
        "in-sine": "cubic-bezier(0.12, 0, 0.39, 0)",
      },
    },
  },
  plugins: [require("tailwindcss-inner-border")],
};
