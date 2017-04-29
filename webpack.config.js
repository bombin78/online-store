webpack = require('webpack');

path = require('path');

var ExtractTextPlugin = require('extract-text-webpack-plugin');


module.exports = {
	context: __dirname + '/frontend',

	entry: {
		basket                  : './scss/2_project/pages/basket.scss',
		blog                    : './scss/2_project/pages/blog.scss',
		catalog                 : './scss/2_project/pages/catalog.scss',
		card                    : './scss/2_project/pages/card.scss',
		contacts                : './scss/2_project/pages/contacts.scss',
		contract                : './scss/2_project/pages/contract.scss',
		faq                     : './scss/2_project/pages/faq.scss',
		main                    : './scss/2_project/pages/main.scss',
		offers                  : './scss/2_project/pages/offers.scss',
		password                : './scss/2_project/pages/password.scss',
		personal                : './scss/2_project/pages/personal.scss',
		sitemap                 : './scss/2_project/pages/sitemap.scss',
		styles                  : './scss/styles.scss',
		tags                    : './scss/2_project/pages/tags.scss',
		video                   : './scss/2_project/pages/video.scss',
		workshop                : './scss/2_project/pages/workshop.scss',
		'about-purchase'        : './scss/2_project/pages/about-purchase.scss',
		'about-store'           : './scss/2_project/pages/about-store.scss'
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