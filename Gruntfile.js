module.exports = function(grunt) {
  require('time-grunt')(grunt);

  require('jit-grunt')(grunt);

  grunt.initConfig({
    sass: {
      options: {
      //   includePaths: [''],
      //   sourceMap: true
      },
      build: {
        files: [{
          expand: true,
          cwd: 'assets/sass/',
          src: ['*.scss'],
          dest: 'assets/css/',
          ext: '.css'
        }]
      },
    }
  });

  grunt.registerTask('default', ['']);
};