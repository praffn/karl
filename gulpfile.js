var gulp = require('gulp');

var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();

gulp.task('scss', function() {
  gulp.src('./src/scss/main.scss')
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(rename({
      basename: 'style'
    }))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

gulp.task('js', function() {
  gulp.src('./src/js/**/*.js')
    .pipe(plumber())
    .pipe(concat('karl.js'))
    .pipe(gulp.dest('./assets/js/'))
});

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'http://vagrantpress.dev',
    open: false
  })
});

gulp.task('watch', function() {
  gulp.watch('./src/scss/**/*.scss', ['scss']);
  gulp.watch('./src/js/**/*.js', ['js']);
});

gulp.task('default', ['js', 'scss', 'browser-sync', 'watch']);

