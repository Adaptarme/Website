/** Minificar archivos JavasScript.
 * @link https://github.com/gruntjs/grunt-contrib-uglify
 */
module.exports = {
	generated: {
		options: {
			sourceMap: true,
			sourceMapName: '../dist/js/main.map'
		},
		files: [
			{
				dest: '../dist/js/main.js',
				src: [ '.tmp/concat/js/main.js' ]
			}
		]
	}
};