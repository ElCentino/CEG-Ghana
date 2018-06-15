const webpackConfig = require('./webpack.config');

let grabber = function(flag) {
    let val = process.argv.indexOf(flag);
    return val === -1 ? null : process.argv[val += 1];
};

let DEV_MODE = grabber("--devmode");

module.exports = function(grunt) {

    grunt.initConfig({

        uglify: {
            build: {
                files: {
                    'scripts/build/minified build/search-engine-details-page.min.js' : 'scripts/build/react build/search-engine-details-page.js',
                    'scripts/build/minified build/search-engine-front-page.min.js' : 'scripts/build/react build/search-engine-front-page.js'
                }
            }
        },

        webpack: {
            options: {
                stats: !process.env.NODE_ENV || process.env.NODE_ENV === 'development'
            },
            prod: webpackConfig
            //dev: Object.assign({watch: true}, webpackConfig)
        },

        watch: {
            options: {
                spawn: false
            },

            scripts: {
                files: ['scripts/build/react build/search-engine-front-page.js'],
                tasks: ['uglify']
            },

            scripts2: {
                files: ['scripts/build/react build/search-engine-details-page.js'],
                tasks: ['uglify']
            },

            scripts3: {
                files: ['src/**/*.js'],
                tasks: ['webpack']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify-es');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-webpack');

    if(DEV_MODE == true && typeof DEV_MODE !== 'undefined') 
        grunt.registerTask('default', ['webpack']);
    else
        grunt.registerTask('default', ['watch']);
}