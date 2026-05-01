const { src, dest, watch, series } = require('gulp');

const sass = require('sass');
const gulpSass = require('gulp-sass')(sass);

const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');

const paths = {
  scss: {
    src: 'assets/scss/style.scss',
    watch: 'assets/scss/**/*.scss',
    dest: 'dist/css'
  }
};

function styles() {
  return src(paths.scss.src)
    .pipe(sourcemaps.init())
    .pipe(gulpSass().on('error', gulpSass.logError))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.scss.dest));
}

function watcher() {
  watch(paths.scss.watch, styles);
}

exports.default = series(styles, watcher);
