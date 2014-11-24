/** Copiar archivos y carpetas.
 * @link https://github.com/gruntjs/grunt-contrib-copy
 */
module.exports = {
	html: {
		src: [
			'./*.php',
			'./style.css',
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