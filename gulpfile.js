// const { src, dest, watch, parallel } = require('gulp');
// const sass = require('gulp-sass')(require('sass'));
// const autoprefixer = require('autoprefixer');
// const postcss = require('gulp-postcss')
// const sourcemaps = require('gulp-sourcemaps')
// const cssnano = require('cssnano');
// const concat = require('gulp-concat');
// const terser = require('gulp-terser-js');
// const rename = require('gulp-rename');
// const imagemin = require('gulp-imagemin');
// const notify = require('gulp-notify');
// const cache = require('gulp-cache');
// const webp = require('gulp-webp');

// const paths = {
//     scss: 'src/scss/**/*.scss',
//     js: 'src/js/**/*.js',
//     imagenes: 'src/img/*'
//     // imagenes: 'src/img/*.{jpg, png}'
// }

// // css es una función que se puede llamar automaticamente
// function css() {
//     return src(paths.scss)
//         .pipe(sourcemaps.init())
//         .pipe(sass())
//         .pipe(postcss([autoprefixer(), cssnano()]))
//         // .pipe(postcss([autoprefixer()]))
//         .pipe(sourcemaps.write('.'))
//         .pipe(dest('./build/css'));
// }

// function javascript() {
//     return src(paths.js)
//         .pipe(sourcemaps.init())
//         .pipe(concat('bundle.js')) // final output file name
//         .pipe(terser())
//         .pipe(sourcemaps.write('.'))
//         .pipe(rename({ suffix: '.min' }))
//         .pipe(dest('./build/js'))
// }

// function imagenes() {
//     return src(paths.imagenes)
//     .pipe(imagemin([
//         imagemin.gifsicle({interlaced: true}),
//         imagemin.mozjpeg({quality: 75, progressive: true}),
//         imagemin.optipng({optimizationLevel: 5}),
//         imagemin.svgo({
//             plugins: [
//                 {removeViewBox: true},
//                 {cleanupIDs: false}
//             ]
//         })
//     ]))
//         .pipe(dest('build/img'))
//         .pipe(notify({ message: 'Imagen Completada' }));
// }

// function versionWebp() {
//     return src('src/img/*')
//         .pipe(webp())
//         .pipe(dest('build/img'))
//         .pipe(notify({ message: 'Imagen Webp Completada' }));
// }

// function watchArchivos() {
//     watch(paths.scss, css);
//     watch(paths.js, javascript);
//     watch(paths.imagenes, imagenes);
//     watch(paths.imagenes, versionWebp);
// }

// exports.webp = versionWebp;
// exports.default = parallel(css, javascript, imagenes, watchArchivos);

const { src, dest, watch, parallel } = require("gulp");

// CSS
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");

// Imagenes
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const avif = require("gulp-avif");

// Javascript
const terser = require("gulp-terser-js");

function css(done) {
  src("src/scss/**/*.scss") // Identificar el archivo .SCSS a compilar
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass()) // Compilarlo
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/css")); // Almacenarla en el disco duro
  done();
}

function imagenes(done) {
  const opciones = {
    optimizationLevel: 3,
  };
  src("src/img/**/*.{png,jpg}")
    .pipe(cache(imagemin(opciones)))
    .pipe(dest("build/img"));
  done();
}

function versionWebp(done) {
  const opciones = {
    quality: 50,
  };
  src("src/img/**/*.{png,jpg}").pipe(webp(opciones)).pipe(dest("build/img"));
  done();
}

function versionAvif(done) {
  const opciones = {
    quality: 50,
  };
  src("src/img/**/*.{png,jpg}").pipe(avif(opciones)).pipe(dest("build/img"));
  done();
}

function javascript(done) {
  src("src/js/**/*.js")
    .pipe(sourcemaps.init())
    .pipe(terser())
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/js"));

  done();
}

function dev(done) {
  watch("src/scss/**/*.scss", css);
  watch("src/js/**/*.js", javascript);
  done();
}

function tarea(done) {
  console.log("Desde la primera tarea");
  done();
}

exports.tarea = tarea;

exports.css = css;
exports.js = javascript;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.dev = parallel(
  css,
  imagenes,
  versionWebp,
  versionAvif,
  javascript,
  dev
);
