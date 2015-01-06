/** Concatenar archivos javascript.
 * @link https://github.com/gruntjs/grunt-contrib-concat
 */
module.exports = {
	generated: {
		files: [
			{
				dest: '.tmp/concat/js/main.js',
				src: [
					'./libs/jquery/dist/jquery.js',
					'./libs/jquery-validation/dist/jquery.validate.js',
					'./libs/bootstrap/dist/js/bootstrap.js',
					'./libs/masonry/dist/masonry.pkgd.js',
					'./js/script.js'
					]
			}
		]
	}
};