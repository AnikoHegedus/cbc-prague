var browserSync = require('browser-sync').create();

var gulp = require('gulp');
var browserSync = require('browser-sync').create();

gulp.task('default', function(){
    browserSync.init({
        proxy: {
            target: "http://www.coding-exercises.local"
        },
        open: "external",
        host: "www.coding-exercises.local",
        port: 3000,
       /* server: {
            baseDir: './'
        },*/
        files: ['*.css', '*.html']
    });
});

