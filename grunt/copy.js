/** Copiar archivos y carpetas.
 * @link https://github.com/gruntjs/grunt-contrib-copy
 */
module.exports = {
	html: {
		src: [
			'./*.php',
			'./style.css',
			'./*.png',
			'./css/*',
			'./fonts/*',
			'./images/*',
			'./img/*',
			'./js/*',
			'./libs/*',
			'./page-templates/*',
			'./partials/*'
			],
		dest: '../dist/'
    }
};