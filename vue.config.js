const Dotenv = require('dotenv-webpack');


module.exports = {
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
