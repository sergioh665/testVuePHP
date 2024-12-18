const webpack = require('webpack');

module.exports = {
  devServer: {
    port: 8081
  },
  transpileDependencies: [], 
  configureWebpack: {
    plugins: [
      new webpack.DefinePlugin({
        __VUE_OPTIONS_API__: true,
        __VUE_PROD_DEVTOOLS__: false
      })
    ]
  }
};
