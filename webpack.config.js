const path = require('path');
const webpack = require('webpack');
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const env = process.env.NODE_ENV

const config = {
   mode: env || 'development'
}

module.exports = {
  devtool: "source-map",
  performance: { hints: false },
  entry: ['./resources/desktop/app.js', './resources/desktop/sass/app.scss', './resources/desktop/sass/global.scss'],
  output: {
    path: path.join(__dirname + '/public/'),
    filename: 'desktop/js/app.js',
    publicPath: '/public/'
  },
  module: {
    rules: [
      {
        test: /\.js/,
        use: [
          {
            loader: "babel-loader",
            options: {presets: ["env"]}
          }
        ]
      },
      {
        test: /\.(sass|scss)$/,
        include: path.resolve(__dirname, 'resources/desktop/sass'),
        use: ExtractTextPlugin.extract({
          use: [{
              loader: "css-loader",
              options: {
                sourceMap: true,
                minimize: true,
                url: false
              }
            },
            {
              loader: "sass-loader",
              options: {
                sourceMap: true
              }
            }
          ]
        })
      }
    ]
  },
  devServer: {
    publicPath: "/",
    contentBase: "./public",
    host: 'localhost',
    port:  '3000',
    historyApiFallback: {
      index: '/public/index.php',
    },
    proxy: {
        '**': {
          target: 'http://mixpix.lc',
          changeOrigin: true,
        }
      }
  },
  plugins: [
    new ExtractTextPlugin({
      filename: './desktop/css/global.css',
      allChunks: true
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery'
    }),
  ]
}