const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const FixStyleOnlyEntriesPlugin = require("webpack-fix-style-only-entries");

const __entry = {
    'light-style' : './src/sass/light-style.scss',
    'preloader-js': './src/js/prealoader.js',
    'global' : './src/js/common-scripts.js',
    'front-page': './src/sass/front-page.scss',
    'home': './src/js/home.js',
    'search': './src/sass/search.scss',
}

const __output = {
    filename: 'js/[name].js',
    path: path.resolve(__dirname, 'assets'),
}

const __module = {
    rules: [
        {
            test: /\m?.js$/,
            exclude: /(node_modules|browser_components)/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env']
                }
            }
        },
        {
            test: /\.(sa|sc|c)ss$/i,
            use: [
                MiniCssExtractPlugin.loader,
                'css-loader',         
                {
                    loader: 'sass-loader',
                    options: {
                        implementation: require('sass'),
                    },
                },                
            ]
        }
    ]
}

const __plugins = [    
    new CleanWebpackPlugin({
        dry: false,
        cleanOnceBeforeBuildPatterns:[
            "**/*",
            "!images/**"
        ],
    }),
    new FixStyleOnlyEntriesPlugin(),
    new MiniCssExtractPlugin({
        filename: 'css/[name].css',
    }),
]

module.exports = env => {

    const devMode = env.development || false;

    return {
        mode: devMode ? 'development' : 'production',
        entry: __entry,
        output: __output,
        plugins: __plugins,
        module: __module,
    }
}