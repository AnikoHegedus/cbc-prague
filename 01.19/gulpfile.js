// load gulp
var gulp = require('gulp');


// load modules
var less = require('gulp-less'); // complies LESS files - so that it can be shared
var postcss = require('gulp-postcss'); //for browser compatibility
var sourcemaps = require('gulp-sourcemaps'); //developer tool shows the name of the LESS file too
var autoprefixer = require('autoprefixer'); 
var clean = require('gulp-clean'); // for deleting files
var browserSync = require('browser-sync').create();


// clean dist/css folder
gulp.task('cleancss', function(){
	return gulp.src('dist/css', { read: false }).pipe(clean());
});


// less compilation
gulp.task('less', ['cleancss'], function(){
	return gulp
		.src('./src/less/index.less')
		.pipe(less())
		.pipe(sourcemaps.init())
		.pipe(postcss([autoprefixer()]))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('./dist/css'))
		.pipe(browserSync.stream());
});


// watch for changes and act
gulp.task('watch', ['less'], function(){

	browserSync.init({
		// set what files be served
		proxy: {
			target: "http://www.coding-exercises.local",
		},
		open: 'external',
		host: 'www.coding-exercises.local',
		port: 3000,
		files: [
			'dist/**/*.css',
			'**/*.html'
		]
	});

	gulp.watch('src/less/**/*.less', ['less']);
});


// the default task
gulp.task('default', ['watch']);
