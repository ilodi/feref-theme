var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function () {
    return gulp.src('./assets/styles/sass/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            versions: [
                'last 2 browsers'
            ]
        }))
        .pipe(gulp.dest('./assets/styles/css/'))
});

gulp.task('default', () => {
    gulp.watch('./assets/styles/sass/*.scss', ['sass']);
});