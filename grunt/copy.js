/**
 * Copiar archivos y carpetas.
 * Ver: https://github.com/gruntjs/grunt-contrib-copy
 */
module.exports = {
	html: {
		src: [
			'.htaccess',
			'./*.php',
			'./screenshot.png',
			'./images/*',
			'./inc/*',
			'./page-templates/*',
			'./partials/*',
			'style.css'
			],
		dest: '../dist/'
    }
};