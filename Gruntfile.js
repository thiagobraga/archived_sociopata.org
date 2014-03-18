module.exports = function (grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: [
          'assets/js/libraries/jquery.min.js',
          'assets/js/libraries/bootstrap.min.js',
          'assets/js/libraries/jasny-bootstrap.min.js',
          'assets/js/plugins/cookie/cookie.min.js',
          'assets/js/plugins/moment/moment.min.js',
          'assets/js/plugins/livestamp/livestamp.min.js',
          'assets/js/plugins/chosen/chosen.min.js',
          'assets/js/main.js'
        ],
        dest: 'assets/js/scripts.min.js'
      }
    },

    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },

    jshint: {
      files: [
        'assets/js/main.js'
      ],
      options: {
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },

    watch: {
      files: ['<%= jshint.files %>'],
      tasks: ['jshint', 'concat', 'uglify']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');

  grunt.registerTask('default', ['jshint', 'concat', 'uglify']);

};
