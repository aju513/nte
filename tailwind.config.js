/** @type {import('tailwindcss').Config} */
export default {
  content: ["./**/*.php", "./src/**/*.{js,ts,jsx,tsx}"],

  theme: {
    container: {
      center: true,
      padding: "15px",
    },

    extend: {
      // ✅ NOW CORRECT
      fontFamily: {
        mulish: ["var(--font-mulish)"],
        playfair: ["var(--font-playfair)"],
        icomoon: ["icomoon", "sans-serif"],
      },
      colors: {
        primary: "rgba(var(--color-primary), <alpha-value>)",
        secondary: "rgba(var(--color-secondary), <alpha-value>)",
        text_color: "rgba(var(--color-text_color), <alpha-value>)",
        dim_bg: "rgba(var(--color-dim_bg), <alpha-value>)",
      },
    },
  },

  plugins: [],
};
