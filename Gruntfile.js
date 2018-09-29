// Load Grunt
module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // Tasks
        sass: { // Begin Sass Plugin
            dist: {
                options: {
                    sourcemap: 'none'
                },
                files: [{
                    expand: true,
                    cwd: 'styles',
                    src: ['*.scss'],
                    dest: './styles',
                    ext: '.css'
                }]
            }
        },
        cssmin: { // Begin CSS Minify Plugin
            target: {
                files: [{
                    expand: true,
                    cwd: 'styles',
                    src: ['*.css', '!*.min.css'],
                    dest: './styles',
                    ext: '.min.css'
                }]
            }
        },
        // uglify: { // Begin JS Uglify Plugin
        //     build: {
        //         src: ['src/*.js'],
        //         dest: 'js/script.min.js'
        //     }
        // },
        // reload: {
        //     proxy: {
        //         host: 'walletstation.test'
        //     },
        //     liveReload: {}
        // },
        watch: { // Compile everything into one task with Watch Plugin
            css: {
                files: ['**/*.html', '**/*.scss'],
                tasks: ['sass']
            },
            all: {
                options: { livereload: true },
                files: ['**/*.html', '**/*.scss']
            }
            // js: {
            //     files: '**/*.js',
            //     tasks: ['uglify']
            // }
        }
    });
    // Load Grunt plugins
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    //grunt.loadNpmTasks('grunt-contrib-uglify');


    grunt.loadNpmTasks('grunt-contrib-watch');

    // Register Grunt tasks
    grunt.registerTask('default', [ 'cssmin', 'sass', 'watch']);
};