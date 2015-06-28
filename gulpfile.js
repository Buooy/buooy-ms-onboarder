'use strict';
 
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var babel = require("gulp-babel");

gulp.task('watcher', function(){
	
    gulp.watch(['admin/assets/css/src/*.scss','admin/assets/css/src/*/*.scss'], ['sass']);
	gulp.watch(['admin/assets/js/src/*.js','admin/assets/js/src/*/*.js'], ['scripts']);
	
});

gulp.task('scripts', function () {
	
	gulp.src([
            
			//'admin/assets/bower_components/remodal/dist/remodal.js',
            'admin/assets/js/src/script.js'
            
		])
    	.pipe(concat('script.min.js'))
		.pipe(babel())
    	.pipe(uglify())
		.pipe(gulp.dest('admin/assets/js'));
		
});

gulp.task('sass', function () {
	
	gulp.src('admin/assets/css/src/style.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(minifyCss({compatibility: 'ie8'}))
		.pipe(gulp.dest('admin/assets/css'));
		
});



gulp.task('default', ['sass','scripts', 'watcher']);