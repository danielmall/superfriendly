module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /*concat: {   
            dist: {
                src: [
                    'js/libs/*.js', // All JS in the libs folder
                    'js/global.js'  // This specific file
                ],
                dest: 'js/build/production.js',
            }
        },*/

        sass: {                              // Task
            dist: {                            // Target
                options: {                       // Target options
                    outputStyle: 'compressed'
                },
                files: {                         // Dictionary of files
                    '__prototypes/002-nav-control/-/c/superfriendly.min.css': '__prototypes/002-nav-control/-/c/_scss/superfriendly.scss'       // 'destination': 'source'
                    /*'www/-/c/littleboxchallenge-enhanced.css': 'www/-/c/_scss/enhanced.scss'       // 'destination': 'source'*/
                }
            }
        },

        watch: {
            sass: { 
                files: ['__prototypes/002-nav-control/-/c/_scss/*.scss'],
                tasks: ['sass']
            }/*,
            scripts: {
                files: ['www/-/j/_source/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            }*/
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    //grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['sass']);

};