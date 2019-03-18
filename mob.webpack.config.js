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
  entry: ['./resources/mobile/app.js', './resources/mobile/sass/app.scss', './resources/mobile/sass/global.scss', './resources/mobile/less/app.less'],
  output: {
    path: path.join(__dirname + '/public/'),
    filename: 'mobile/js/app.js',
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
        include: path.resolve(__dirname, 'resources/mobile/sass'),
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
      },
      {
        test: /\.less$/,
        include: path.resolve(__dirname, 'resources/mobile/less'),
          use: [{
            loader: "style-loader"
          }, {
            loader: "css-loader", options: {
              sourceMap: true
            }
          }, {
            loader: 'less-loader', options: {
              sourceMap: true
            }
          }]
      },
      { test: /\.css/, loader: 'style-loader!css-loader' },
      { test: /\.(woff|woff2|eot|ttf)$/, loader: 'url-loader?limit=100000' },
    ]
  },
  devServer: {
    publicPath: "/",
    contentBase: "./public",
    host: 'localhost',
    port:  '3000',
    historyApiFallback: {
      index: '/public/mobile.php',
    },
    proxy: {
        '**': {
          target: 'http://mixpix.lc',
          changeOrigin: true
        }
      }
  },
  plugins: [
    new ExtractTextPlugin({
      filename: './mobile/css/global.css',
      allChunks: true
    }),
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      'window.jQuery': 'jquery'
    })
  ]
}