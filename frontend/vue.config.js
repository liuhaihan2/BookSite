module.exports = {
    // proxy API requests to Valet during development
    // devServer: {
    //     proxy: 'http://coolapp.test/'
    // },


    // output built static files to Laravel's public dir.
    // note the "build" script in package.json needs to be modified as well.
    outputDir: '../public',

    // modify the location of the generated HTML file.
    // make sure to do this only in production.
    indexPath: process.env.NODE_ENV === 'production'
      ? '../resources/views/index.blade.php'
      : 'index.html',
    css: {
        loaderOptions: {
            less: {
                modifyVars: {
                    'component-background' : '#fafafa',
                    'menu-collapsed-width': '50px',
                    'input-hover-border-color': '#B89477',
                    'input-bg': '#fafafa',
                    'primary-color': '#d1b283'

                },
                javascriptEnabled: true
            }
        }
    }
  }
