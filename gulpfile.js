// Include gulp
var gulp = require('gulp');

// Include plugins
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minify = require('gulp-minify-css');

// Concatenate JS Files
gulp.task('scripts', function() {
    return gulp.src(['public/assets/jquery/js/jquery.js','public/assets/bootstrap/js/bootstrap.js', 'public/assets/tweak.js'])
      .pipe(concat('app.js'))
      .pipe(rename({suffix: '.min'}))
      .pipe(uglify())
      .pipe(gulp.dest('public/assets/'));
});

gulp.task('css', function() {
    return gulp.src(['public/assets/bootstrap/css/bootstrap.css', 'public/assets/tweak.css'])
      .pipe(concat('app.css'))
      .pipe(rename({suffix: '.min'}))
      .pipe(minify())
      .pipe(gulp.dest('public/assets/'));
});

gulp.task('move', function(){
  gulp.src('public/assets/bootstrap/fonts/*')
  .pipe(gulp.dest('public/fonts/'));
});

// Default Task
gulp.task('default', ['scripts', 'css', 'move']);





