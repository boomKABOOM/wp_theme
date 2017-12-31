const gulp = require("gulp")
const sass = require("gulp-sass")
const watchSass = require("gulp-watch-sass")

gulp.task('watch', function(){
  gulp.watch('./bmkbm/include/scss/styles.scss', ['sass']); 
  // Other watchers
})
