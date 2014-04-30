var gulp = require('gulp'),
    jshint = require('gulp-jshint'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    uglify = require('gulp-uglify');

// JSHint
gulp.task('jshint', function () {
    return gulp.src('./assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('YOUR_REPORTER_HERE'));
});

// Concat & Minify JS
// gulp.task('minify', function () {
//     return gulp.src('assets/js/*.js')
//         .pipe(concat('all.js'))
//         .pipe(gulp.dest('dist'))
//         .pipe(rename('all.min.js'))
//         .pipe(uglify())
//         .pipe(gulp.dest('dist'));
// });

// // Watch Our Files
// gulp.task('watch', function () {
//     gulp.watch('src/*.js', ['lint', 'minify']);
// });

// Default
gulp.task('default', [
    'jshint',
    //'minify',
    //'watch'
]);
