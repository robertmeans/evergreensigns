module.exports = function(grunt) {

    grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    uglify: {
      my_target: {
        files: {
          '_scripts/scripts.js': ['components/js/scripts-staging.js']
        } //files
      } //my_target
    }, //uglify 

    /* Sass */
    sass: {
      dev: {
        options: {
          style: 'expanded',
          sourcemap: 'none'
        },
        files: {
          '_css/styles-expanded.css': 'components/sass/styles.scss'
        }
      },
      dist: {
        options: {
          style: 'compressed',
          sourcemap: 'none'
        },
        files: {
          '_css/styles.css': 'components/sass/styles.scss'
        }
      }
    },
    /* Autoprefixer */
    autoprefixer: {
      options: {
        browsers: ['last 8 versions']
      },
      // prefix all files
      multiple_files: {
        expanded: true, 
        flatten: true,
        src: '_css/*.css',
        dist: ''
      }
    },

      /* Watch */
    watch: { 

      options: { livereload: true },
      scripts: {
        files: ['components/js/scripts-staging.js'],
        tasks: ['uglify']
      }, //scripts

      css: {
        files: '**/*.scss',
        tasks: ['sass','autoprefixer']
      }, // css

      hypertext: {
        files: ['*.php','*.htm','_includes/*.php']
      } //hypertext

    }, //watch

  });
  grunt.loadNpmTasks('grunt-contrib-uglify'); //uglify minifies js upon save
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.registerTask('default',['watch']);
}