const Fiber = require('fibers');
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const path = require( 'path' );
const WebpackAssetsManifest = require( 'webpack-assets-manifest' );
const CopyPlugin = require( 'copy-webpack-plugin' );
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

const production = 'development' !== process.env.NODE_ENV;

module.exports = {
	entry: {
		// Theme.
		'bundle': './src/js/index',
		'bundleEditor': './src/js/editor/index',
		'burgerMenu': './src/js/burger-menu',
		'style': './src/sass/index',
		'styleBurgerMenu': './src/sass/theme/components/burger/index-burger',
		'editor': './src/sass/editor/index',

		// Blocks.
		'blocks/button': './src/sass/blocks/button/index',
		'blocks/categories': './src/sass/blocks/categories/index',
		'blocks/column': './src/sass/blocks/column/index',
		'blocks/columns': './src/sass/blocks/columns/index',
		'blocks/cover': './src/sass/blocks/cover/index',
		'blocks/embed': './src/sass/blocks/embed/index',
		//'blocks/gallery': './src/sass/blocks/gallery/index',
		'blocks/group': './src/sass/blocks/group/index',
		'blocks/image': './src/sass/blocks/image/index',
		'blocks/heading': './src/sass/blocks/heading/index',
		'blocks/latest-posts':'./src/sass/blocks/latest-posts/index',
		'blocks/list': './src/sass/blocks/list/index',
		'blocks/media-text': './src/sass/blocks/media-text/index',
		'blocks/navigation': './src/sass/blocks/navigation/index',
		'blocks/navigation-link': './src/sass/blocks/navigation-link/index',
		'blocks/navigation-submenu': './src/sass/blocks/navigation-submenu/index',
		'blocks/post-author': './src/sass/blocks/post-author/index',
		'blocks/pullquote': './src/sass/blocks/pullquote/index',
		'blocks/post-navigation-link': './src/sass/blocks/post-navigation-link/index',
		'blocks/post-template': './src/sass/blocks/post-template/index',
		'blocks/query-pagination': './src/sass/blocks/query-pagination/index',
		'blocks/quote': './src/sass/blocks/quote/index',
		'blocks/search': './src/sass/blocks/search/index',
		'blocks/separator': './src/sass/blocks/separator/index',
		'blocks/social-links': './src/sass/blocks/social-links/index',
		'blocks/spacer': './src/sass/blocks/spacer/index',
	},
	output: {
		library: 'SITE',
		path: path.resolve( __dirname, 'dist' ),
		filename: 'js/[name].[chunkhash].min.js',
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				use: 'babel-loader',
				exclude: /(node_modules)/,
			},
			{
				test: /\.scss$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: 'css-loader',
						options: {
							url: false,
						},
					},
					{
						loader: 'postcss-loader',
						options: {
							postcssOptions: {
								ident: 'postcss',
							}
						},
					},
					{
						loader: 'sass-loader',
						options: {
							implementation: require('sass'),
							sassOptions: {
								fiber: Fiber,
								outputStyle: 'expanded',
							},
						},
					}
				],
			},
			{
				test: /.*\.(png|jpe?g|svg)$/i,
				use: {
					loader: 'url-loader',
					options: {
						limit: 5000,
						name: 'images/[name].[hash:7].[ext]',
					},
				},
			},
			{
				test: /.(woff(2)?)(\?[a-z0-9]+)?$/,
				use: {
					loader: 'file-loader',
					options: {
						name: 'fonts/[name].[ext]',
					},
				},
			},
		],
	},
	optimization: {
		splitChunks: {
			cacheGroups: {
				commons: {
					test: /[\\/]node_modules[\\/]/,
					name: 'vendor',
					chunks: 'all',
				},
			},
		},
		minimizer: [
			new CssMinimizerPlugin(),
		],
	},
	plugins: [
		new CopyPlugin({
			patterns: [
				{ from: 'src/images', to: 'images' },
				{ from: 'src/fonts', to: 'fonts' },
			],
		}),
		new MiniCssExtractPlugin( {
			filename: 'css/[name].[chunkhash].min.css',
		}),
		new WebpackAssetsManifest(),
	],
};

if ( production ) {
	module.exports.devtool = false;
}
