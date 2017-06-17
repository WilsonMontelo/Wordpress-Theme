// Less 
var gulp = require('gulp');
var less = require('gulp-less');
// Compilando Less
gulp.task('less', function() {
    gulp.src('./css/**/*.less')
        .pipe(less())
        .pipe(gulp.dest(function(f) {
            return f.base;
        }))
});
// Assintindo Tarefa
gulp.task('default', function() {
    gulp.watch('./css/**/*.less', ['less']);
})