/** Minificar archivos JavasScript.
 * @link https://github.com/gruntjs/grunt-contrib-uglify
 */
module.exports = {
	generated: {
		files: [
			{
				dest: '../dist/js/main.js',
				src: [ '.tmp/concat/js/main.js' ]
			}
		]
	}
};