var gulp = require('gulp'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    minifyCss = require('gulp-minify-css'),
    rucksack = require('rucksack-css'),
    sourcemaps = require('gulp-sourcemaps'),
    plumber  = require('gulp-plumber'),
    uglify  = require('gulp-uglify'),
    imagemin  = require('gulp-imagemin'),
    concat = require('gulp-concat'),
    del = require('del'),
    path = require('path'),
    runSequence = require('run-sequence');

var config = {
  dest: '../assets',
  src: 'src'
};

gulp.task('clean', function (cb) {
  return del([
        // path.join(config.dest, 'img'),
        path.join(config.dest, 'css'),
        path.join(config.dest, 'js')
      ], {force: true});
});

gulp.task('styles', function() {
    var processors = [
        autoprefixer,
        rucksack
    ];
    gulp.src('src/scss/**/*.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass({ style: 'compressed' }))
    .pipe(postcss(processors))
    .pipe(minifyCss())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.join(config.dest, 'css')));
});

gulp.task('js', function() {
    gulp.src('src/js/**/*.js')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(concat('app.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.join(config.dest, 'js')));
});

gulp.task('image', function() {
    gulp.src('src/img/*')
    .pipe(imagemin())
    .pipe(gulp.dest(path.join(config.dest, 'img')));
});

// gulp.task('default', ['clean', 'styles', 'js', 'image']);
gulp.task('build', function(callback) {
    runSequence(
        'clean',
        ['styles', 'js'],
        callback
    );
});

gulp.task('watch:style', function() {
    gulp.watch('src/scss/**/*.scss', ['styles']);
})

gulp.task('watch:js', function() {
    gulp.watch('src/js/**/*.js', ['js']);
})

gulp.task('watch',['watch:style','watch:js']);