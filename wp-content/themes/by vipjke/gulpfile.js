var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch');

gulp.task('sass', function() {
    return gulp.src('sass/*.scss') // Gets all files ending with .scss in app/scss and children dirs
        .pipe(sass())
        .pipe(gulp.dest('css/'))
});

gulp.task('watch', function(){
    gulp.watch('sass/*.scss', ['sass']);
});