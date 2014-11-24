/** Sustituye los JS y CSS no optimizadas en un conjunto de archivos HTML.
 * @link https://github.com/yeoman/grunt-usemin
 */
module.exports = {
	html: ['header.php', 'footer.php'],
	options: {
		dest: '../dist'
	}
};