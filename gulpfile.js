var gulp = require('gulp'),
sass = require('gulp-sass'),
webpack = require('webpack');

gulp.task('scripts', function(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if(err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
})

gulp.task('sass', function() {
  return gulp.src('./scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css/'));
});

gulp.task('watch', function() {
    gulp.watch('./scss/*.scss', ['sass']);
    gulp.watch('./scripts/**/*.js', function() {
      gulp.start('scripts');
});
});



gulp.task('default', ['sass', 'watch']);
