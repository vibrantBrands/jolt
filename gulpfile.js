'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function () {

  return gulp.src('./scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css/'));
});

gulp.task('wufoo', function () {

  return gulp.src('./scss/plugins/wufoo.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css/'));
});

gulp.task('watch', function () {

    //watch SASS
    gulp.watch('./scss/**/**.scss', ['sass']);
    gulp.watch('./scss/plugins/wufoo.scss', ['wufoo']);

});


gulp.task('default', ['sass', 'watch', 'wufoo']);
