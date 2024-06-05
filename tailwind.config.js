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
        "Ravi-Prakash": ["Ravi Prakash", "sans-serif"],
        "Pathway-Gothic-One": ["Pathway Gothic One", "sans-serif"],
        "Fira-Mono": ["Fira Mono", "sans-serif"],
        ABeeZee: ["ABeeZee", "sans-serif"],
        "Odibee-Sans": ["Odibee Sans", "sans-serif"],
        "Red-Hat-Text": ["Red Hat Text", "sans-serif"],
        myfont: ["MyFont", "sans-serif"],
      },
      colors: {
        primary: "#4EEBEF",
        secondary: "#1B2A2E",
      },
    },
  },
  plugins: [],
  corePlugins: {
    scrollBehavior: true,
  },
};
