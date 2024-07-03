// import preset from './vendor/filament/support/tailwind.config.preset'

// export default {
//     presets: [preset],
//     content: [
//         './app/Filament/**/*.php',
//         './resources/views/**/*.blade.php',
//         './vendor/filament/**/*.blade.php',
//     ],
// }

/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./index.html",
      "./src/**/*.{vue,js,ts,jsx,tsx}",
      "./node_modules/flowbite/**/*.js",
      "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
      "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
      "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
      "./storage/framework/views/*.php",
      "./resources/views/**/*.blade.php",
      "./resources/js/**/*.vue",
    ],
    purge: ['./index.html', './resources/js/**/*.{vue,js,ts,jsx,tsx}'],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
      extend: {
        colors: {
          yellow: {
            DEFAULT: "#FFFF00",
            light: "#FEF6C5",
            dark: "#FF931E",
          },
        },
        boxShadow: {
          "3xl": "0px 3px 10px 0px rgba(0, 0, 0, 0.0784)",
          "4xl": "0px 10px 15px 0px rgba(0, 0, 0, 0.0784)",
          form: "0px 8px 15px 4px rgba(0, 0, 0, 0.0784)",
          library: "0px 3px 10px 0px rgba(0, 0, 0, 0.102)",
          post:"0px 3px 3px 0px rgba(0, 0, 0, 0.1608)",
          article:"0px 3px 7.5px 0px rgba(0, 0, 0, 0.0784)",
          fullArticle:"0px 3px 6.5px 0px rgba(0, 0, 0, 0.102)"
        },
        dropShadow: {
          "3xl": "0px 3px 10px 0px rgba(0, 0, 0, 0.0784)",
        },
        borderRadius: {
          'l0': '10px',
          'normal': '10px',
        },
      },
    },
    plugins: [],
  };
  