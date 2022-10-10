const path = require('path');
const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

module.exports = {
  mode: 'development',
  entry: './index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
  },
  plugins: [
    new SVGSpritemapPlugin('svg/**/*.svg', {
      output: {
        filename: 'assets/images/sprite.svg',
      },
      sprite: {
        prefix: 'svg-',
      },
   })
  ]
};