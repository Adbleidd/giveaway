var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
sass.compiler = require('node-sass');
var rename = require("gulp-rename");

gulp.task('sass', function () {
    return gulp.src('assets/SASS/*.scss')
    .pipe(sass({outputStyle: 'compressed'})
    .on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', function() {
    gulp.watch('./assets/SASS/**/*.scss', gulp.series('sass'));
});