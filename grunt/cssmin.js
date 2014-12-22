/** Comprimir archivos CSS.
 * @link https://github.com/gruntjs/grunt-contrib-cssmin
 */
module.exports = {
	generated: {
		files: {
			'../dist/css/main.css': [
				'./libs/bootstrap/dist/css/bootstrap.css',
				'./libs/font-awesome/css/font-awesome.css',
				'./css/base.css'
				]
		}
	}
};