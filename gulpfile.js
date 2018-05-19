//initialize all of our variables
var app, base, concat, directory, gulp, gutil, hostname, path, refresh, sass, uglify, imagemin, minifyCSS, del, rename, browserSync, autoprefixer, gulpSequence, shell, sourceMaps, plumber;

var autoPrefixBrowserList = ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'];

//load all of our dependencies
//add more here if you want to include more libraries
gulp        = require('gulp');
gutil       = require('gulp-util');
concat      = require('gulp-concat');
uglify      = require('gulp-uglify');
sass        = require('gulp-sass');
sourceMaps  = require('gulp-sourcemaps');
images    = require('gulp-imagemin');
minifyCSS   = require('gulp-minify-css');
browserSync = require('browser-sync').create();
autoprefixer = require('gulp-autoprefixer');
plumber     = require('gulp-plumber');
rename      = require('gulp-rename');
gulpSequence = require('gulp-sequence').use(gulp);

// paths
var styleSrc = 'source/sass/**/*.sass',
    styleDest = 'build/assets/css/',
    htmlSrc = 'source/',
    htmlDest = 'build/',
    vendorSrc = 'source/js/vendors/',
    vendorDest = 'build/assets/js/',
    scriptSrc = 'source/js/*.js',
    scriptDest = 'build/assets/js/';


gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "http://localhost/build",
        options: {
            reloadDelay: 250
        },
        notify: false,
    });

    gulp.watch(styleSrc,['sass']);
    gulp.watch(scriptSrc,['scripts']);
    gulp.watch(vendorSrc,['vendors']);
    gulp.watch(['build/*.php', 'build/assets/css/*.css', 'build/assets/js/*.js', 'build/assets/js/vendors/*.js']).on('change', browserSync.reload);
});

// Compiles all SASS files
gulp.task('sass', function() {
    gulp.src('source/sass/**/*.sass')
        .pipe(plumber())
        .pipe(sass({
            style: 'compressed'
        }))
        .pipe(rename({
            basename: 'main',
            suffix: '.min'
          }))

        .pipe(gulp.dest('build/assets/css'));
});

gulp.task('images', function() {
    gulp.src('source/img/*')
        .pipe(images())
        .pipe(gulp.dest('build/assets/img'));
});

// Uglify js files
gulp.task('scripts', function() {
    gulp.src('source/js/*.js')
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('build/assets/js'));
});

//Concat and Compress Vendor .js files
gulp.task('vendors', function() {
    gulp.src(
            [
                'source/js/vendors/jquery.min.js',
                'source/js/vendors/*.js'
            ])
        .pipe(plumber())
        .pipe(concat('vendors.js'))
        .pipe(uglify())
        .pipe(gulp.dest('build/assets/js'));
});

//basically just keeping an eye on all HTML files
gulp.task('html', function() {
    //watch any and all HTML files and refresh when something changes
    return gulp.src('build/*.php')
        .pipe(plumber())
        .pipe(browserSync.reload({stream: true}))
        //catch errors
        .on('error', gutil.log);
});


//this is our master task when you run `gulp` in CLI / Terminal
//this is the main watcher to use when in active development
//  this will:
//  startup the web server,
//  start up browserSync
//  compress all scripts and SCSS files
gulp.task('default', ['browserSync', 'sass', 'scripts', 'vendors'], function() {});

//this is our deployment task, it will set everything for deployment-ready files
gulp.task('deploy', gulpSequence(['scripts-deploy', 'styles-deploy', 'images-deploy'], 'html-deploy'));