var gulp            = require('gulp'),
    concat          = require('gulp-concat'),
    sass            = require('gulp-sass'),
    autoprefixer    = require('gulp-autoprefixer'),
    browserSync     = require('browser-sync'),
    reload          = browserSync.reload,
    paths           = {
        scripts: {
            src: 'assets/js/src',
            files: [
                'assets/bower/jquery/dist/jquery.js',
                'assets/bower/bootstrap/dist/js/bootstrap.js',
                'assets/bower/lightbox/js/lightbox.js',
                'assets/bower/jQuery-linkify/dist/jquery.linkify.js',
                'assets/bower/jquery-mousewheel/jquery.mousewheel.js',
                'assets/js/src/core/facebook.js',
                'assets/js/src/main.js'
            ],
            main: 'assets/js/dist/scripts.js',
            dest: 'assets/js/dist'
        },

        styles: {
            src:   'assets/sass',
            files: 'assets/sass/**/*.scss',
            main:  'assets/sass/styles.scss',
            dest:  'assets/css/dist'
        },

        browserSync: [
            '!assets/css/dist/**/*.min.css',
            '!assets/js/dist/**/*.min.js',
            '!application/logs/**/*.php',
            'assets/css/dist/**/*.css',
            'assets/js/dist/**/*.js',
            'application/**/*.php',
            'index.php'
        ]
    };

// Styles
gulp.task('styles', function () {
    return gulp.src(paths.styles.main)
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(reload({ stream: true }));
});

// JavaScript
gulp.task('scripts', function () {
    return gulp.src(paths.scripts.files)
        .pipe(concat(paths.scripts.main))
        .pipe(gulp.dest(paths.scripts.dest));
});

// BrowserSync
gulp.task('browser-sync', function () {
    browserSync({
        logPrefix: 'Sociopata',
        proxy:     'local.sociopata.org',
        host:      'local.sociopata.org',
        files:     paths.browserSync,
        port:      3060,
        open:      false,
        notify:    false
    });
});

// Default
gulp.task('default', ['styles', 'browser-sync'], function () {
    gulp.watch(paths.styles.files, ['styles']);
    gulp.watch(paths.scripts.files, ['scripts']);
});
