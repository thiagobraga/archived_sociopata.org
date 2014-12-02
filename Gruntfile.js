/**
 * Sociopata's Gruntfile
 * http://sociopata.org
 */
module.exports = function (grunt) {

    'use strict';
    var

        /**
         * JS files to concat and minify.
         *
         * @type {Array}
         */
        js_files = [
            'assets/bower/jquery/dist/jquery.js',
            'assets/bower/bootstrap/dist/js/bootstrap.js',
            'assets/bower/owl.carousel/dist/owl.carousel.js',
            'assets/bower/lightbox/js/lightbox.js',
            'assets/js/src/core/facebook.js',
            'assets/js/src/main.js'
        ];

    grunt.initConfig({
        concat: {
            options: {
                separator: ';\n'
            },
            dist: {
                src: js_files,
                dest: 'assets/js/dist/scripts.js'
            }
        },

        uglify: {
            dist: {
                files: {
                    'assets/js/dist/scripts.min.js': 'assets/js/dist/scripts.js'
                }
            }
        },

        less: {
            development: {
                options: {
                    paths: ['assets/less/**'],
                    yuicompress: false,
                    relativeUrls: true
                },
                files: {
                    'assets/css/dist/styles.css': 'assets/less/styles.less'
                }
            }
        },

        cssmin: {
            compress: {
                options: {
                    keepSpecialComments: 0
                },
                files: {
                    'assets/css/dist/styles.min.css': 'assets/css/dist/styles.css'
                }
            }
        },

        browserSync: {
            bsFiles: {
                src: [
                    'assets/css/dist/**/*.css',
                    'assets/js/dist/**/*.js',
                    'assets/images/**/*',
                    'application/**/*.php',
                    'index.php'
                ]
            },
            options: {
                proxy: 'local.sociopata.org',
                host: 'local.sociopata.org',
                watchTask: true,
                notify: false,
                injectChanges: true,
                port: 3060,
                ghostMode: {
                    scroll: true,
                    links: false,
                    forms: true
                }
            }
        },

        watch: {
            dist: {
                files: ['assets/js/src/**/*.js'],
                tasks: ['concat:dist']
            },
            less: {
                files: 'assets/less/**/*.less',
                tasks: ['less']
            }
        }
    });

    require('load-grunt-tasks')(grunt);
    grunt.registerTask('default', [
        'less',
        'cssmin',
        'concat',
        'uglify',
        'browserSync',
        'watch'
    ]);
    grunt.registerTask('production', [
        'less',
        'cssmin',
        'concat',
        'uglify'
    ]);

};
