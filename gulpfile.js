'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var clean = require('gulp-clean');

/***********************************************
Template files
***********************************************/
gulp.task('build-template-files', ['clean-template-files', 'copy-template-files']);

gulp.task('copy-template-files', function() {
  return gulp.src([
    './app/**/*.php',
    './app/*.css'
  ])
  .pipe(gulp.dest('./dist'));
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

gulp.task('clean-template-files', function () {
  return gulp.src([
    './dist/*.php',
    './dist/*.css'], {read: false})
    .pipe(clean());
});

/***********************************************
Build tasks
***********************************************/
gulp.task('watch', function() {
    gulp.watch( './app/sass/**/*.sass', ['build-css'] );
    gulp.watch( ['./app/**/*.php', './app/style.css'], ['build-template-files'] );
});

gulp.task('default', ['build-template-files', 'build-css']);
