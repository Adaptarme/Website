/** Copiar archivos y carpetas.
 * @link https://github.com/gruntjs/grunt-contrib-copy
 */
module.exports = {
	html: {
		src: [
			'./*.php',
			'./*.png',
			'./css',
			'./fonts/*',
			'./images/*',
			'./page-templates/*',
			'./partials/*'
			],
		dest: '../dist/'
    }
};