'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var clean = require('gulp-clean');

/***********************************************
Teamplte Files
***********************************************/
gulp.task('template-files', function() {
  return gulp.src([
    './app/*.php',
    './app/style.css'
  ])
  .pipe(gulp.dest('./dist'));
});

/***********************************************
CSS Files
***********************************************/
gulp.task('build-css', ['clean-css', 'sass'] );

gulp.task('sass', function () {
  return gulp.src('./app/sass/**/*.sass')
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe(gulp.dest('./dist/css'));
});
gulp.task('default', ['sass']);

/***********************************************
Housekeeping
***********************************************/
gulp.task('clean-css', function () {
  return gulp.src('./dist/**/*.css', {read: false})
    .pipe(clean());
});

/***********************************************
Build Tasks
***********************************************/
gulp.task('watch', function() {
    gulp.watch( './app/sass/**/*.sass', ['build-css'] );
});
