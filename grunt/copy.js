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
			'./inc/*',
			'./page-templates/*',
			'./partials/*',
			'style.css'
			],
		dest: '../dist/'
    }
};