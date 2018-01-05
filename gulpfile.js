var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
  var task = {};
  task.msg1 = console.log('things happened');
  task.compile_scss = gulp.src('./bmkbm/include/scss/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./bmkbm/include/css'));
  return task;
});

gulp.task('watch', function () {
  gulp.watch('./**/include/scss/**/*.scss', ['sass']);
});
