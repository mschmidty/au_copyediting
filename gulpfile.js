const { src, dest, watch, series, parallel } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
const svgSymbols = require('gulp-svg-symbols');
var svgstore = require('gulp-svgstore');
var svgmin = require('gulp-svgmin');
var path = require('path');


//Styles Task
function css() {
    return src('./src/scss/*.scss', { sourcemaps: true })
        .pipe(sass())
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(minifyCSS())
        .pipe(rename('style.css'))
        .pipe(dest('./'), { sourcemaps: true })
        .pipe(browserSync.stream());
}

function js() {
    return src('./src/js/*.js', { sourcemaps: true })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(concat('main.min.js'))
        .pipe(dest('./js', { sourcemaps: true }));
}

function browser() {
    browserSync.init({
        proxy: 'aucopyediting:8888',
        files: [
            './**/*.php'
        ]
    });

    watch('./src/scss/**/*', css);
    watch('./src/js/*', js).on('change', browserSync.reload);
}

gulp.task(`sprites`, function() {
  return gulp
    .src(`src/svg/*.svg`)
    .pipe(svgSymbols({templates: [`default-svg`]}))
    .pipe(rename('svg.php'))
    .pipe(gulp.dest(`template-parts`))
})

exports.css = css;
exports.js = js;
exports.default = series(css, js, browser);