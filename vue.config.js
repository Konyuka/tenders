const Dotenv = require('dotenv-webpack');


module.exports = {
    // devServer: {
    //     // proxy: 'https://www.tenderfiles.com/'
    // },
    configureWebpack: {
        plugins: [
            new Dotenv()
        ]
    },
    chainWebpack: config =>
    {
        config.plugins.delete('prefetch');
    }
}
