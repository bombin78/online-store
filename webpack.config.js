webpack = require('webpack');

path = require('path');

var ExtractTextPlugin = require('extract-text-webpack-plugin');


module.exports = {
	context: __dirname + '/frontend',

	entry: {
		basket                  : './scss/2_project/pages/basket/index.scss',
		blog                    : './scss/2_project/pages/blog/index.scss',
		catalog                 : './scss/2_project/pages/catalog/index.scss',
		card                    : './scss/2_project/pages/card/index.scss',
		contacts                : './scss/2_project/pages/contacts/index.scss',
		contract                : './scss/2_project/pages/contract/index.scss',
		faq                     : './scss/2_project/pages/faq/index.scss',
		main                    : './scss/2_project/pages/main/index.scss',
		offers                  : './scss/2_project/pages/offers/index.scss',
		password                : './scss/2_project/pages/password/index.scss',
		personal                : './scss/2_project/pages/personal/index.scss',
		search                 	: './scss/2_project/pages/search/index.scss',
		sitemap                 : './scss/2_project/pages/sitemap/index.scss',
		styles                  : './scss/styles.scss',
		tags                    : './scss/2_project/pages/tags/index.scss',
		video                   : './scss/2_project/pages/video/index.scss',
		workshop                : './scss/2_project/pages/workshop/index.scss',
		'about-purchase'        : './scss/2_project/pages/about-purchase/index.scss',
		'about-store'           : './scss/2_project/pages/about-store/index.scss'
	},

	output: {
		path: './frontend/css',
		filename: '../js/bundle.js',
		library: 'index'
	},

	watch: true,

	resolve: {
		extensions: ['', '.js', '.jsx']
	},

	// PHPShtorm при открытой панели разработчика
	// с этой функцией работает не корректно
	devtool: '#cheap-blocks-source-map',

	module: {
		loaders: [
			{
				test: /\.jsx?$/,
				exclude: [/node_modules/],
				loader: 'babel-loader',
				query: {
					presets: ['es2015', 'stage-0', 'stage-1']
				}
			},
			{
				test: /\.scss?$/,
				loader: ExtractTextPlugin.extract(
					'css-loader!' +
					'autoprefixer-loader?{browsers:' +
						'[' +
							' "Explorer > 7",' +
							' "Firefox > 3.5",' +
							' "Chrome > 4",' +
							' "Opera > 9.5",' +
							' "Safari > 4",' +
						']!' +
					'resolve-url-loader!sass-loader?sourceMap')
			},
			{
				test: /\.woff2?$|\.ttf$|\.eot$|\.svg$|\.png|\.jpe?g|\.gif$/,
				loader: 'file-loader?name=[path][name].[ext]'
			}
		]
	},

	plugins: [
		new ExtractTextPlugin('[name].css', {
			allChunks: true
		})
	]
};