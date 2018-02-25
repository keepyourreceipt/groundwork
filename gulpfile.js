'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var clean = require('gulp-clean');

/***********************************************
Template files
***********************************************/
gulp.task('build-template-files', ['clean-template-files', 'copy-template-files']);

gulp.task('clean-template-files', function () {
  return gulp.src([
    './dist/*.php'], {
      read: false}
    ).pipe(clean());
});

gulp.task('copy-template-files', function() {
  return gulp.src([
    './app/**/*.php'
  ])
  .pipe(gulp.dest('./dist'));
});


/***********************************************
JS files
***********************************************/
gulp.task('build-js-files', ['clean-js-files', 'copy-js-files']);

gulp.task('clean-js-files', function () {
  return gulp.src('./dist/js/**/*.js', {read: false})
    .pipe(clean());
});

gulp.task('copy-js-files', function() {
  return gulp.src([
    './app/js/**/*.js'
  ])
  .pipe(gulp.dest('./dist/js'));
});

/***********************************************
CSS files
***********************************************/
gulp.task('build-css-files', ['clean-css-files', 'compile-sass'] );

gulp.task('clean-css-files', function () {
  return gulp.src('./dist/**/*.css', {read: false})
    .pipe(clean());
});

gulp.task('compile-sass', function () {
  return gulp.src('./app/sass/**/*.sass')
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe(gulp.dest('./dist/css'));
});

/***********************************************
Build tasks
***********************************************/
gulp.task('watch', function() {
    gulp.watch( ['./app/**/*.php', './app/inc/**/*.php'], ['build-template-files'] );
    gulp.watch( './app/sass/**/*.sass', ['build-css-files'] );
    gulp.watch( './app/js/**/*.js', ['build-js-files'] );
});

gulp.task('default', ['build-template-files', 'build-css-files', 'build-js-files']);
