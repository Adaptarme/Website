/** Concatenar archivos javascript.
 * @link https://github.com/gruntjs/grunt-contrib-concat
 */
module.exports = {
	generated: {
		files: [
			{
				dest: '.tmp/concat/js/main.js',
				src: [
					'./libs/jquery/dist/jquery.js',
					'./libs/jquery-validation/dist/jquery.validate.js',
					'./libs/bootstrap/dist/js/bootstrap.js',
					'./libs/masonry/dist/masonry.pkgd.js',
					'./libs/fitvids/jquery.fitvids.js',
					'./libs/sticky/jquery.sticky.js',
					'./libs/prismjs/prism.js',
					'./libs/prismjs/components/prism-css.js',
					'./libs/prismjs/components/prism-javascript.js',
					'./libs/prismjs/components/prism-git.js',
					'./libs/prismjs/components/prism-powershell.js',
					'./libs/prismjs/components/prism-python.js',
					'./libs/prismjs/components/prism-ruby.js',
					'./libs/prismjs/components/prism-php.js',
					'./js/script.js'
					]
			}
		]
	}
};