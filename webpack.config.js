const path = require('path');

module.exports = {
  entry: "./scripts/script.js",
  output: {
    path: path.resolve(__dirname, "./script"),
    filename: "App.js"
  },
  module: {
    loaders: [
      {
        loader: 'babel-loader',
        query: {
          presets: ['es2015']
        },
        test: /\.js$/,
        exclude: /node_modules/
      }
    ]
  }
}
