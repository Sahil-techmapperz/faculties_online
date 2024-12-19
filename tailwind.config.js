/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: "#0077FE",
      },
      fontSize: {
        xs: "0.75rem", // Extra small
        sm: "0.875rem", // Small
        base: "15px", // Base font size
        base2x:"22px",
        base4x:"30px",
        base6x:"46px",
        lg: "1.125rem", // Large
        xl: "1.25rem", // Extra large
        "2xl": "1.5rem", // Double extra large
        "3xl": "1.875rem", // Triple extra large
        "4xl": "2.25rem", // Quad extra large
        "5xl": "3rem", // Quintuple extra large
        "6xl": "3.75rem", // Sextuple extra large
      },
      spacing: {
        basepading: "80px 50px",
      },
    },
  },
  plugins: [],
}

