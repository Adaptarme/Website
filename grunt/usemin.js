/**
 * Sustituye los JS y CSS no optimizadas en un conjunto de archivos HTML.
 * Ver: https://github.com/yeoman/grunt-usemin
 */
module.exports = {

	// Indicamos los archivos donde buscara los comentarios y remplazara por los min.
	html: ['../dist/header.php', '../dist/footer.php'],
  options: {
    dest: '../dist'
  }

};