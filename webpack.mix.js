const mix = require("laravel-mix");

const Dotenv = require("dotenv-webpack");

(module.exports = {
    configureWebpack: {
        plugins: [new Dotenv()],
    },
    loaders: [{
            test: /.jsx?$/,
            loader: "babel-loader",
            exclude: /node_modules/,
        },
        {
            test: /\.css$/,
            loader: "style-loader!css-loader",
        },
        {
            test: /\.(jpe?g|png|gif|woff|woff2|eot|ttf|svg)(\?[a-z0-9=.]+)?$/,
            loader: "url-loader?limit=100000",
        },
        {
            test: /\.(graphql|gql)$/,
            exclude: /node_modules/,
            loader: ["graphql-tag/loader"],
        },
    ],
    resolve: {
        extensions: [".ts", ".tsx", ".js", ".jsx", ".scss", ".gql", ".graphql"],
        modules: ["/node_modules/"],
    },
})
// Fixed Error Render Graphql.gql
mix.webpackConfig({
    module: {
        rules: [{
            test: /\.(graphql|gql)$/,
            exclude: /node_modules/,
            loader: 'graphql-tag/loader'
        }]
    }
});

mix
    .js("resources/js/main.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .sass("resources/sass/main.scss", "public/css");

mix.minify("public/css/app.css");
mix.minify("public/css/main.css");
mix.minify("public/js/main.js");

mix.styles(
    [ "public/css/app.min.css","public/css/main.min.css"],
    "public/css/all.css"
);
mix.minify("public/css/all.css");
