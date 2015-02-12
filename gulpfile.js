/**
 * @file    gulpfile.js
 * @author  Thiago Braga <contato@thiagobraga.org>
 */

var gulp       = require('gulp'),
  sass         = require('gulp-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  minifycss    = require('gulp-minify-css'),
  plumber      = require('gulp-plumber'),
  uglify       = require('gulp-uglify'),
  rename       = require('gulp-rename'),
  concat       = require('gulp-concat'),
  imagemin     = require('gulp-imagemin'),
  pngquant     = require('imagemin-pngquant'),
  browserSync  = require('browser-sync'),
  bsFiles      = [
    'public/css/**.min.css',
    'public/js/**.min.js',
    'app/**/*.php',
    'index.php',
    '.htaccess'
  ],
  fonts_path   = [
    './bower_components/font-awesome/fonts/**.*',
    './bower_components/bootstrap-sass/assets/fonts/bootstrap/**.*',
    './src/fonts/**.*'
  ];

// Styles
gulp.task('styles', function () {
  return gulp.src('./src/scss/styles.scss')
    .pipe(plumber())
    .pipe(sass({ style: 'expanded' }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('./public/css'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest('./public/css'))
    .pipe(browserSync.reload({ stream: true }));
});

// Scripts
gulp.task('scripts', function () {
  return gulp.src('./src/js/**/*.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./public/js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('./public/js'));
});

// Images
gulp.task('images', function () {
  return gulp.src('./src/images/**/*')
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{ removeViewBox: false }],
      use: [pngquant({ quality: 80 })]
    }))
    .pipe(gulp.dest('./public/images'));
});

// Fonts
gulp.task('fonts', function () {
  return gulp.src(fonts_path)
    .pipe(gulp.dest('./public/fonts'));
});

// BrowserSync
gulp.task('browser-sync', function () {
  browserSync({
    logPrefix: 'Sociopata',
    proxy:     'local.sociopata.org',
    host:      'local.sociopata.org',
    files:     bsFiles,
    port:      3060,
    open:      false,
    notify:    false
  });
});

// Watch
gulp.task('watch', function () {
  gulp.watch('./src/scss/**/*.scss', ['styles']);
  gulp.watch('./src/js/**/*.js', ['scripts']);
  gulp.watch('./src/images/**.*', ['images']);
});

// Default
gulp.task('default', function () {
  gulp.start('fonts', 'styles', 'scripts', 'images', 'browser-sync', 'watch');
});
