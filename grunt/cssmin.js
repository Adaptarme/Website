/**
 * Comprimir archivos CSS.
 * Ver: https://github.com/gruntjs/grunt-contrib-cssmin
 */
module.exports = {
	generated: {
		files: {
			'../dist/css/main.css': [
				'./libs/bootstrap/dist/css/bootstrap.css',
				'./libs/prismjs/prism.css',
				'./css/*.css'
				]
		}
	}
};