const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .sourceMaps();

mix.browserSync("localhost:8000");

mix.options({
    processCssUrls: false,
});
