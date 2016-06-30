var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    autoprefixer = require('gulp-autoprefixer'),
    jade = require('gulp-jade');

gulp.task('jade', function() {
    return gulp.src('jade/*.jade')
        .pipe(jade({
            pretty: true
        }))
        .pipe(gulp.dest('html/'));
});
gulp.task('sass', function() {
    return gulp.src('sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('css/'))
});

gulp.task('watch', function() {
    gulp.watch('sass/*.scss', ['sass']);
    gulp.watch('jade/*.jade', ['jade']);
    //gulp.watch('sass/*.scss', ['default']);

});

gulp.task('default', function () {
    return gulp.src('css/style.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css'));
});