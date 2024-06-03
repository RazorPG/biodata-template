/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html"],
  theme: {
    extend: {
      backgroundImage: {
        "main-texture": "url('/src/img/home-bg.gif')",
      },
      fontFamily: {
        "Montserrat-Alternates": ["Montserrat Alternates", "sans-serif"],
        Macondo: ["Macondo", "sans-serif"],
        "Lobster-Two": ["Lobster Two", "sans-serif"],
      },
      colors: {
        primary: "#4EEBEF",
        secondary: "#0B4445",
      },
    },
  },
  plugins: [],
};
