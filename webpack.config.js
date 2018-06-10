const path = require('path');

module.exports = {

    entry : './src/main-page/index.js',
    output : {
        path : path.join(__dirname, "scripts"),
        filename: "search-engine-front-page.js"
    },

    module : {

        rules: [
            {
                test: /\.js$/,
                exclude: /(node_modules)/,
                query: {
                    presets : ['env', 'react'],
                },
                loader: 'babel-loader'
            }, 
            {
                test: /\.json$/,
                exclude: /(node_modules)/,
                loader: 'json-loader'
            }
        ]
    }
}