'use strict';

const {watch, src, dest} = require('gulp');
const sass = require('gulp-sass');


function css(){
    return src('assets/css/sass/**/*.scss')
    .pipe(sass())
    .pipe(dest('assets/css'));
}




exports.default = () => {

    watch('assets/css/sass/**/*.scss', css);

}