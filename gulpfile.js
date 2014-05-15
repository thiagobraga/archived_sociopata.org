'use strict';

// Load plugins
var gulp = require('gulp'),
    less = require('gulp-less'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');

// Styles
gulp.task('styles', function () {
    return gulp.src('assets/less/styles.less')
        .pipe(less({
            style: 'expanded',
        }))
        .pipe(autoprefixer(
            'last 2 version',
            'safari 5',
            'ie 8',
            'ie 9',
            'opera 12.1',
            'ios 6',
            'android 4'
        ))
        .pipe(gulp.dest('assets/css'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(minifycss())
        .pipe(gulp.dest('assets/css'))
        .pipe(notify({
            message: 'Styles task complete'
        }));
});

// Scripts
gulp.task('scripts', function () {
    return gulp.src('assets/scripts/**/*.js')
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('default'))
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js'))
        .pipe(notify({
            message: 'Scripts task complete'
        }));
});

// Images
gulp.task('images', function () {
    return gulp.src('assets/images/**/*')
        .pipe(cache(imagemin({
            optimizationLevel: 3,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('assets/images'))
        .pipe(notify({
            message: 'Images task complete'
        }));
});

// Clean
gulp.task('clean', function () {
    return gulp.src(['assets/css', 'dist/scripts', 'dist/images'], {
        read: false
    }).pipe(clean());
});

// Default task
gulp.task('default', ['clean'], function () {
    gulp.start(
        'styles',
        'scripts',
        //'images',
        'watch'
    );
});

// Watch
gulp.task('watch', function () {
    var server = livereload();

    gulp.watch('assets/less/**/*.less', ['styles']);
    gulp.watch('assets/scripts/**/*.js', ['scripts']);
    //gulp.watch('assets/images/**/*', ['images']);

    gulp.watch(['./']).on('change', function (file) {
        server.changed(file.path);
    });

});
