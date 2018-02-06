'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var clean = require('gulp-clean');

/***********************************************
Template files
***********************************************/
gulp.task('build-template-files', ['clean-template-files', 'build-js', 'copy-template-files']);

gulp.task('copy-template-files', function() {
  return gulp.src([
    './app/**/*.php',
    './app/*.css'
  ])
  .pipe(gulp.dest('./dist'));
});


/***********************************************
JS files
***********************************************/
gulp.task('build-js', ['clean-js', 'copy-js-files']);

gulp.task('copy-js-files', function() {
  return gulp.src([
    './app/js/**/*.js'
  ])
  .pipe(gulp.dest('./dist/js'));
});

/***********************************************
CSS files
***********************************************/
gulp.task('build-css', ['clean-css', 'sass'] );

gulp.task('sass', function () {
  return gulp.src('./app/sass/**/*.sass')
    .pipe( sass().on( 'error', sass.logError ) )
    .pipe(gulp.dest('./dist/css'));
});

/***********************************************
Housekeeping
***********************************************/
gulp.task('clean-css', function () {
  return gulp.src('./dist/**/*.css', {read: false})
    .pipe(clean());
});

gulp.task('clean-js', function () {
  return gulp.src('./dist/js/**/*.js', {read: false})
    .pipe(clean());
});

gulp.task('clean-template-files', function () {
  return gulp.src([
    './dist/*.php',
    './dist/js/**/*.js',
    './dist/*.css'], {read: false})
    .pipe(clean());
});

/***********************************************
Build tasks
***********************************************/
gulp.task('watch', function() {
    gulp.watch( './app/sass/**/*.sass', ['build-css'] );
    gulp.watch( './app/js/**/*.js', ['build-js'] );
    gulp.watch( ['./app/**/*.php', './app/style.css'], ['build-template-files'] );
});

gulp.task('default', ['build-template-files', 'build-css']);
