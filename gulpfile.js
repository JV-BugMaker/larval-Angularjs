var elixir = require('laravel-elixir');
//在项目根目录引入gulp和uglify插件
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');

// 样式
gulp.task('styles', function() {
    return gulp.src('./resources/assets/css/main.scss')
        .pipe(sass())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
        .pipe(gulp.dest('./public/dist/styles'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifycss())
        .pipe(gulp.dest('../public/dist/styles'))
        .pipe(notify({ message: 'Styles task complete' }));
});
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});
// 脚本
gulp.task('scripts', function() {
  return gulp.src('./resources/assets/js/*.js')
    .pipe(jshint('.jshintrc'))
    .pipe(jshint.reporter('default'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('./public/dist/scripts'))
    .pipe(notify({ message: 'Scripts task complete' }));
});
// 图片
gulp.task('images', function() {
  return gulp.src('./resources/assets/images/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
    .pipe(gulp.dest('./public/dist/images'))
    .pipe(notify({ message: 'Images task complete' }));
});
// 清理
gulp.task('clean', function() {
  return gulp.src(['./public/dist/styles', './public/dist/scripts', './public/dist/images'], {read: false})
    .pipe(clean());
});
// 预设任务
gulp.task('default', ['clean'], function() {
    //gulp.start('scripts','styles', 'images');
    gulp.start('styles');
});
// 看守
gulp.task('watch', function() {

  // 看守所有.scss档
  gulp.watch('./resources/css/*.scss', ['styles']);

  // 看守所有.js档
  gulp.watch('./resources/js/*.js', ['scripts']);

  // 看守所有图片档
  gulp.watch('./resources/images/**/*', ['images']);

  // 建立即时重整伺服器
  var server = livereload();

  // 看守所有位在 dist/  目录下的档案，一旦有更动，便进行重整
  gulp.watch(['./public/dist/**']).on('change', function(file) {
    server.changed(file.path);
  });

});
