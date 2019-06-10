const CKEditorWebpackPlugin = require('@ckeditor/ckeditor5-dev-webpack-plugin');
const { styles } = require('@ckeditor/ckeditor5-dev-utils');
const Mock = require('mockjs');
const todayBooks = require('./src/mock/test.json')
const Random = Mock.Random;

module.exports = {
    outputDir: '../public',

    // modify the location of the generated HTML file.
    // make sure to do this only in production.
    indexPath: process.env.NODE_ENV === 'production' ?
        '../resources/views/index.blade.php' : 'index.html',
    // The source of CKEditor is encapsulated in ES6 modules. By default, the code
    // from the node_modules directory is not transpiled, so you must explicitly tell
    // the CLI tools to transpile JavaScript files in all ckeditor5-* modules.
    transpileDependencies: [
        /ckeditor5-[^/\\]+[/\\]src[/\\].+\.js$/,
    ],

    configureWebpack: {
        plugins: [
            // CKEditor needs its own plugin to be built using webpack.
            new CKEditorWebpackPlugin({
                // See https://ckeditor.com/docs/ckeditor5/latest/features/ui-language.html
                language: 'en'
            })
        ]
    },

    css: {
        loaderOptions: {
            less: {
                modifyVars: {
                    'component-background': '#fafafa',
                    'menu-collapsed-width': '50px',
                    'input-hover-border-color': '#B89477',
                    'input-bg': '#fafafa',
                    'primary-color': '#d1b283'

                },
                javascriptEnabled: true
            },
            // Various modules in the CKEditor source code import .css files.
            // These files must be transpiled using PostCSS in order to load properly.
            postcss: styles.getPostCssConfig({
                themeImporter: {
                    themePath: require.resolve('@ckeditor/ckeditor5-theme-lark')
                },
                minify: true
            })
        }
    },

    chainWebpack: config => {
        // Vue CLI would normally use its own loader to load .svg files. The icons used by
        // CKEditor should be loaded using raw-loader instead.

        // Get the default rule for *.svg files.
        const svgRule = config.module.rule('svg');

        // Then you can either:
        //
        // * clear all loaders for existing 'svg' rule:
        //
        //		svgRule.uses.clear();
        //
        // * or exclude ckeditor directory from node_modules:
        svgRule.exclude.add(__dirname + '/node_modules/@ckeditor');

        // Add an entry for *.svg files belonging to CKEditor. You can either:
        //
        // * modify the existing 'svg' rule:
        //
        //		svgRule.use( 'raw-loader' ).loader( 'raw-loader' );
        //
        // * or add a new one:
        config.module
            .rule('cke-svg')
            .test(/ckeditor5-[^/\\]+[/\\]theme[/\\]icons[/\\][^/\\]+\.svg$/)
            .use('raw-loader')
            .loader('raw-loader');
    },

    devServer: {
        port: 4000,
        before(app) {
            app.get('/mockBooks', (req, res, ) => {
                    // test
                    // var data = Mock.mock({
                    //     'list|1-10': [{
                    //         'id|+1': 1
                    //     }]
                    // });
                    // let data = Mock.mock({
                    //     "data|6": [{
                    //         'author': '@cname()',
                    //         'book_name': '@ctitle()',
                    //         'summary': '@csentence(20)',
                    //         'introduction': '@cparagraph()',
                    //         // 'img-url': Random.image('295x426', 'mock的图片')
                    //         'img-url': '@image("300x250", "@book_name 封皮")'
                    //     }]
                    // })
                    res.json(todayBooks);
                }),
                app.get('/mockLists', (req, res) => {
                    let data = Mock.mock({
                        "data|4": [{
                            'list_title': '@ctitle',
                            'description': '@csentence(20)',
                            'theme_img': '@image("300x250", "@book_name 封皮")'
                        }]
                    })
                    res.json(data)
                }),
                app.get('/mockAppre', (req, res) => {
                    let data = Mock.mock({
                        appre_title: Random.ctitle(),
                        summary: Random.cparagraph(),
                        author: Random.cname(),
                        img_url: '@image("300x250", "三体封皮")'
                    })
                    res.json(data)
                })
        }
    }
};