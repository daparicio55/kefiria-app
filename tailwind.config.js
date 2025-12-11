/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class",
  content: [
    "./resources/**/*.{blade.php,js,vue}",
  ],
  theme: {
    extend: {
      colors: {
        "primary": "#d4e157",
        "secondary": "#ff7043",
        "jungle-dark": "#0e2b14",
        "jungle-medium": "#2e5c35",
        "earth-light": "#f0ede6",
        "earth-dark": "#5d4037",
        "background-light": "#fcfbf7",
        "background-dark": "#051f0b",
      },
      fontFamily: {
        "display": ["Jost", "sans-serif"],
        "body": ["Epilogue", "sans-serif"]
      },
      borderRadius: {
        "DEFAULT": "0.5rem",
        "lg": "1rem",
        "xl": "1.5rem",
        "full": "9999px"
      },
      backgroundImage: {
        'leaf-pattern': "url('data:image/svg+xml,%3Csvg width=\\'60\\' height=\\'60\\' viewBox=\\'0 0 60 60\\' xmlns=\\'http://www.w3.org/2000/svg\\'%3E%3Cg fill=\\'none\\' fill-rule=\\'evenodd\\'%3E%3Cg fill=\\'%232e5c35\\' fill-opacity=\\'0.05\\'%3E%3Cpath d=\\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')",
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
