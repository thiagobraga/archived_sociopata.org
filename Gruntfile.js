module.exports = function (grunt) {

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
                    'assets/bower/jquery/dist/jquery.min.js',
                    'assets/bower/bootstrap/dist/js/bootstrap.min.js',
                    'assets/bower/jasny-bootstrap/dist/js/jasny-bootstrap.min.js',
                    'assets/bower/handlebars/handlebars.min.js',
                    'assets/bower/jquery-cookie/jquery.cookie.js',
                    'assets/bower/moment/moment.js',
                    'assets/bower/livestampjs/livestamp.min.js',
                    'assets/bower/typeahead.js/dist/typeahead.bundle.min.js',
                    'assets/js/plugins/chosen/chosen.min.js',
                    'assets/js/plugins/tabslideout/jquery.tabSlideOut.v1.3.js',
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
                    '<%= jshint.files %>'
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
                    'application/controllers/*',
                    'application/language/**/*',
                    'application/models/*',
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

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    grunt.registerTask('default', [
        'concat',
        'uglify',
        'less',
        'cssmin',
        'watch'
    ]);

};
