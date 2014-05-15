module.exports = function (grunt) {

    'use strict';
    require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // JSHint
        jshint: {
            files: [
                'assets/js/main.js'
            ],
            options: {
                force: true,
                globals: {
                    jQuery: true,
                    console: true,
                    module: true,
                    document: true
                }
            }
        },

        // Concat
        concat: {
            options: {
                separator: ';\n'
            },
            dist: {
                src: [
                    'assets/bower/jquery/dist/jquery.js',
                    'assets/bower/bootstrap/dist/js/bootstrap.js',
                    'assets/bower/videojs/dist/video-js/video.js',
                    'assets/bower/lightbox/js/lightbox.js',
                    'assets/js/main.js'
                ],
                dest: 'assets/js/scripts.min.js'
            }
        },

        // Uglify
        uglify: {
            build: {
                src: 'assets/js/scripts.min.js',
                dest: 'assets/js/scripts.min.js'
            }
        },

        // LESS
        less: {
            development: {
                options: {
                    paths: [
                        'assets/less/**'
                    ],
                    yuicompress: false
                },
                files: {
                    'assets/css/styles.min.css': 'assets/less/styles.less'
                }
            }
        },

        // CSSmin
        cssmin: {
            compress: {
                files: {
                    'assets/css/styles.min.css': [
                        'assets/bower/lightbox/css/lightbox.css',
                        'assets/css/styles.min.css'
                    ]
                }
            }
        },

        // Watch
        watch: {
            scripts: {
                files: [
                    'Gruntfile.js',
                    'assets/js/**/*.js'
                ],
                tasks: [
                    'concat',
                    'uglify'
                ],
                options: {
                    livereload: 9090
                },
            },
            less: {
                files: [
                    'assets/less/**/*.less'
                ],
                tasks: [
                    'less',
                    'cssmin'
                ],
                options: {
                    livereload: 9090
                },
            },
            php: {
                files: [
                    '.*',
                    'application/config/*',
                    'application/controllers/*.php',
                    'application/language/**/*.php',
                    'application/models/*.php',
                    'application/views/template.php',
                    'application/views/**/*.php',
                    'assets/images/*',
                    'assets/images/**/*'
                ],
                options: {
                    livereload: 9090
                }
            }
        }
    });

    grunt.registerTask('default', [
        'concat',
        'uglify',
        'less',
        'cssmin',
        'watch'
    ]);

};
