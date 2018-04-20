// webpack.config.js
var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('../../web/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // read app.js     -> output as web/build/app.js
    .addEntry('app', './Resources/public/js/app.js')

    // Enable Vue loader
    .enableVueLoader()
;


// Use polling instead of inotify
const config = Encore.getWebpackConfig();
config.watchOptions = {
    poll: true,
};

// Export the final configuration
module.exports = config;
