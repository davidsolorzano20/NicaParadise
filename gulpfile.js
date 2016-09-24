var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src('./public/assets/sass/**/*.scss')
      .pipe(sass())
      .pipe(gulp.dest('./public/css'));
});

gulp.task('watch', function () {
    gulp.watch('./public/assets/sass/**/*.scss', ['sass']);
});

gulp.task('default', ['watch']);