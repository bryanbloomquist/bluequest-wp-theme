'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const del = require('del');
const minifyCSS = require('gulp-minify-css');
const minifyJS = require('gulp-minify');
const sourcemaps = require('gulp-sourcemaps');

sass.compiler = require('node-sass');

gulp.task('compress', function () {
    return gulp.src('./assets/src/*.js')
        .pipe(minifyJS({
            ext: {
                min: '.min.js'
            },
            ignoreFiles: [
                '-min.js',
                'popper.min.js',
                'bootstrap.min.js',
            ]
        }))
        .pipe(gulp.dest('./assets/js'));
});

gulp.task('sass', function () {
    return gulp.src('./assets/scss/**/*.scss')
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass().on('error', sass.logError))
        .pipe(minifyCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', function () {
    gulp.watch(['./assets/scss/**/*.scss', './assets/src/*.js'], gulp.series(['sass', 'compress']));
});

gulp.task('clean', function () {
    return del([
        './assets/css/*',
        './assets/js/main.min.js',
    ]);
});

gulp.task('default', gulp.series(['clean', 'sass', 'compress', 'watch']));