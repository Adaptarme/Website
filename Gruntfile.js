'use strict';

module.exports = function (grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json')
	});
	
	/**
	 * Mostrar el tiempo de ejecución de las tareas.
	 * Ver: https://github.com/sindresorhus/time-grunt
	 */
	require('time-grunt')(grunt);
	
	/**
	 * Almazenar las tarea en la carpeta 'grunt'.
	 * Ver: http://firstandthird.github.io/load-grunt-config/
	 */
	require('load-grunt-config')(grunt);

};