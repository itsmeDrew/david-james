var gulp = require('gulp');
var scss = require('gulp-scss');
var cssmin = require('gulp-cssmin');
var gulpif = require('gulp-if');
var production = false;
var assetsPath = './htdocs/content/themes/respario';

gulp.task('css', function () {
    return gulp.src(assetsPath + '/scss/style.scss')
        .pipe(scss())
        .pipe(gulpif(production, cssmin()))
        .pipe(gulp.dest(assetsPath));
});

gulp.task('watch', function () {
    gulp.watch(assetsPath + '/**/*.scss', ['css']);
});

gulp.task('build', function () {
    production = true;
    gulp.start(['css']);
});

gulp.task('default', [ 'css', 'watch' ]);