const Dotenv = require('dotenv-webpack');


module.exports = {
    devServer: {
        proxy: 'https://localhost:8000/'
    },
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
