var gulp = require('gulp'),
    watch = require('gulp-watch'),
    less = require('gulp-less');

gulp.task('less', function() {
    gulp.src(['./less/*.less'])
        .pipe(less())
        .on('error', function(err) {
            console.log(err)
        })
        .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
    gulp.watch(['./less/*.less'], ['less']);
});

gulp.task('default', ['watch', 'less']);
