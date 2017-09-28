require('es6-promise').polyfill();
let gulp = require('gulp');
let sass = require('gulp-sass');
let autoprefixer = require('gulp-autoprefixer');
let rtlcss = require('gulp-rtlcss');
let rename = require('gulp-rename');
let plumber = require('gulp-plumber');
let gutil = require('gulp-util');
let concat = require('gulp-concat');
let jshint = require('gulp-jshint');
let uglify = require('gulp-uglify');
let browserSync = require('browser-sync').create();
let babel = require('gulp-babel');
let imagemin = require('gulp-imagemin');

let reload = browserSync.reload;

let onError = function(error) {
  console.log('An error occured: ', gutil.colors.magenta(error.message));
  gutil.beep();
  this.emit('end');
};


// gulp.task('sass', function() {
//   return gulp.src('./sass/*.scss')
//     .pipe(plumber({ errorHandler: onError }))
//     .pipe(sass({ 'outputStyle': 'compressed' }))
//     .pipe(autoprefixer())
//     .pipe(gulp.dest('./'))
//     .pipe(rtlcss())
//     .pipe(rename({ basename: 'rtl' }))
//     .pipe(gulp.dest('./'))
//     .pipe(browserSync.stream());
// });

gulp.task('js', function() {
  return gulp.src(['./js/**/*.js'])
    .pipe(babel({
      presets: ['env']
    }))
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(concat('build.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('./js'))
    .pipe(browserSync.stream());
});

gulp.task('images', function() {
  return gulp.src('./images/src/*')
    .pipe(plumber({ errorHandler: onError }))
    .pipe(imagemin({ optimizationLevel: 7, progressive: true }))
    .pipe(gulp.dest('./images/dist'))
    .pipe(browserSync.stream());
});

// gulp.task('watch', function() {
//   browserSync.init({
//     proxy: 'https://localhost/le-vrai-interactive/web-wp/wordpress/'
//   });
//   gulp.src('./sass/**/*.scss', ['sass', reload]);
//   gulp.src('./js/**/*.js', ['js', reload]);
//   gulp.src('./images/src/*', ['images', reload]);
// });

gulp.task('sass', function() {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass({ 'outputStyle': 'compressed' }))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
});

gulp.task('serve', ['sass', 'js', 'images'], function() {
  browserSync.init({
    proxy: 'https://localhost/le-vrai-interactive/web-wp/wordpress'
  });
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('./js/**/*.js', ['js']);
  gulp.watch('./images/src/*', ['images']);
  gulp.watch('./*.php').on('change', browserSync.reload);
});

// gulp.task('default', ['serve']);

// gulp.task('default', ['sass', 'js', 'images', 'watch']);

gulp.task('default', ['serve']);
