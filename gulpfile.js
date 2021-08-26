/*!
    Project Title: My Project Name
    Code Name: ProjectCode
    Code Color: 
    Code Hex: 
    Description:
    Start:
    Developer: Carl Angelo Nievarez
        > Github: https://github.com/aice09
        > Email: carlangelopamparonievarez@gmail.com
        > FB: https://facebook.com/aice0927

    * Copyright 2019-2021 Ace.
								
						  /////		
					    ///
					   ///
					  ///
				     ///
		////////////////////////////
		   ||||||||||||||||||||
		   ||||||||||||||||||||
		   ||||||||||||||||||||		  
		   ||||||||||||||||||||		  
		   || 	  ACE GULP	 ||
		   ||||||||||||||||||||		  
		   ||||||||||||||||||||		  
		   ||||||||||||||||||||
		   \\\\\\\\\\//////////
		    \\\\\\\\\/////////
		     ||||||||||||||||
			 ||||||||||||||||
			  ||||||||||||||
			  ||||||||||||||
				
*/

///////////////////////////////////////////////////////////
//            Gulp or Dev Dependencies ...               //
///////////////////////////////////////////////////////////
const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const clean = require('gulp-clean');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const image = require('gulp-image');
const less = require('gulp-less');
const minify = require('gulp-minify');
const rename = require('gulp-rename');
const sass = require('gulp-sass')(require('sass'));
const sassGlob = require('gulp-sass-glob');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');

///////////////////////////////////////////////////////////
//                Repo Paths Sitemap ...                 //
///////////////////////////////////////////////////////////
var paths = {
	root: {
		www: 'public',   //I'm not using this here no purpose
	},
	src: {
		root: 'src',
		html: 'public/**/*.html',
		css: 'src/css/*.css',
		js: 'src/js/*.js',
		dbdumps: 'src/dumps/**/*.*',
		imgs: 'src/img/**/*.+(png|jpg|gif|svg)',
		scss: 'src/scss/**/*.scss',
	},
	dist: {
		root: 'dist',
		css: 'dist/css',
		js: 'dist/js',
		imgs: 'dist/img',
		dbdumps: 'dist/dumps',
	},
};

///////////////////////////////////////////////////////////
//      Gulp Task and Pipings Starts Here ...            //
///////////////////////////////////////////////////////////

// Compile SCSS
gulp.task('sass', () => {
	return gulp
    .src(paths.src.scss)
    .pipe(sourcemaps.init())
		.pipe(
			sass({
        outputStyle: 'expanded',
			}).on('error', sass.logError),
    )
    .pipe(sourcemaps.write())
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('./'))  
		.pipe(gulp.dest(paths.src.root + '/css'))
		.pipe(browserSync.stream());
});

// Minify + Combine CSS
gulp.task('css', () => {
	return gulp
    .src(paths.src.css)
    .pipe(sourcemaps.init())
		.pipe(
			cleanCSS({
				compatibility: 'ie8',
			}),
		)
		.pipe(concat('system.css'))
		.pipe(
			rename({
				suffix: '.min',
			}),
    )
    .pipe(sourcemaps.write('./'))  
		.pipe(gulp.dest(paths.dist.css));
});

// Minify + Combine JS
gulp.task('js', () => {
  return gulp.src(paths.src.js)
    .pipe(sourcemaps.init())
		.pipe(
			babel({
				presets: ['@babel/preset-env'],
			}),
		)
		.pipe(uglify())
    .pipe(concat('system.js'))
    .pipe(
        rename({ 
        suffix: '.min', 
      }))
    .pipe(sourcemaps.write('./'))     
    .pipe(gulp.dest(paths.dist.js))  
		.pipe(browserSync.stream());
});

//Optimize Image or Minify Image
gulp.task('img', async function () {
  gulp.src(paths.src.imgs)
    .pipe(image({
      pngquant: true,
      optipng: false,
      zopflipng: true,
      jpegRecompress: false,
      mozjpeg: true,
      guetzli: false,
      gifsicle: true,
      svgo: true,
      concurrent: 10,
      quiet: true // defaults to false
    }))
    .pipe(gulp.dest(paths.dist.imgs));
});

// copy dump files to dist
gulp.task('dbdumps', () => {
	return gulp.src(paths.src.dbdumps).pipe(gulp.dest(paths.dist.dbdumps));
});

/* clean dist
   use to delete your entire dist folder
*/
gulp.task('clean', function() {
	return gulp.src(paths.dist.root).pipe(clean());
});

// Prepare all assets for production
gulp.task('build', gulp.series('sass', 'css', 'js', 'img', 'dbdumps'));

//Default task is to watch scss, css, and js
gulp.task('default', function () {
  gulp.watch(paths.src.scss, gulp.series('sass'));
	gulp.watch(paths.src.css, gulp.series('css'));
	gulp.watch(paths.src.js, gulp.series('js'));
});

// Watch (SASS, CSS, JS, and HTML) reload browser on change
//This is watch with browserSync but here I will not use it instead I use just watch scss,css,and js, just run gulp command
gulp.task('watch', () => {
	browserSync.init({
		server: {
			baseDir: paths.root.www,
		},
	});

	gulp.watch(paths.src.scss, gulp.series('sass'));
	gulp.watch(paths.src.css, gulp.series('sass'));
	gulp.watch(paths.src.js, gulp.series('js'));
	gulp.watch(paths.src.html).on('change', browserSync.reload);
});

/*
For Gulp
gulp.task('default', ['css']);

For Gulp 4
gulp.task('default', gulp.series('css', 'js'));
gulp.task('default', gulp.parallel('css', 'js'));
*/
