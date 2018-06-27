module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    php: {
		dist: {
			options: {
				port: 96,
                hostname: '0.0.0.0',
                keepalive: true
			}
		},
	},

    sass: {
     options: {
           includePaths: ['bower_components/bootstrap/scss']
      },
      dist: {
        options: {
          outputStyle: 'expanded'
        },
        files: {
          'style.css': 'scss/style.scss'
        }
      }
    },

    watch: {
      grunt: {
        files: ['Gruntfile.js', '*']
      },
      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      },
      options: { 
        livereload: true,
        host: 'localhost',
        port: 35728
      } //Add Live Reload Chrome Extension for this to work
    },

    uglify: {
      all: {
        files: [{
          expand: true,
          cwd: 'js/',
          src: ['*.js'],
          dest: 'js',
          ext: '.min.js',
        }],
      },
    },

    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'css',
          src: ['*.css'],
          dest: 'css',
          ext: '.min.css'
        }]
      }
    }


  });

grunt.loadNpmTasks('grunt-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-serve');
grunt.loadNpmTasks('grunt-contrib-uglify');
grunt.loadNpmTasks('grunt-contrib-cssmin');
grunt.loadNpmTasks('grunt-php');

grunt.registerTask('serve', ['php']);
grunt.registerTask('default', 'watch');
grunt.registerTask('production', ['sass', 'cssmin', 'uglify']);
};
