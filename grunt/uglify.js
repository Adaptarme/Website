/**
 * Minificar archivos JavasScript.
 * Ver: https://github.com/gruntjs/grunt-contrib-uglify
 */
module.exports = {
	generated: {
		options: {
			sourceMap: false,
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