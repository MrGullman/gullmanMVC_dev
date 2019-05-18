const gulp = require("gulp");
const imagemin = require("gulp-imagemin");
const uglify = require("gulp-uglify");
const sass = require("gulp-sass");
const concat = require("gulp-concat");

/*
    ---- TOP LEVEL FUNCTIONS ----
    gulp.task - Defaulut tasks
    gulp.src - Point to files to Vue.use
    gulp.dest - Point to folder to output
    gulp.watch - Watch files and folders for changes
*/

// Log message
gulp.task("message", function() {
    return console.log("Gulp is running...");
});

// Imagemin Optimize Images
// install npm install --save-dev gulp-imagemin
gulp.task("imageMin", () =>
    gulp
        .src("resources/assets/img/*")
        .pipe(imagemin())
        .pipe(gulp.dest("public/img"))
);

// Javascript Optimasation
// Install npm install --save-dev gulp-uglify
// gulp.task("minify", () =>
//     gulp
//         .src("resources/assets/js/*.js")
//         .pipe(uglify())
//         .pipe(gulp.dest("public/js"))
// );

// SASS Compiler
// Install npm install ---save-dev gulp-sass
gulp.task("sass", () =>
    gulp
        .src("resources/assets/sass/style.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest("public/css"))
);

// Javascript Optimasation
// Install npm install --save-dev gulp-uglify
// Install npm install --save-dev gulp-concat
// Scripts
gulp.task("scripts", () =>
    gulp
        .src("resources/assets/js/*.js")
        .pipe(concat("main.js"))
        // .pipe(uglify())
        .pipe(gulp.dest("public/js"))
);

// Default Task
gulp.task("default", ["imageMin", "sass", "scripts"]);

gulp.task("watch", function() {
    gulp.watch("resources/assets/sass/*.scss", ["sass"]);
    gulp.watch("resources/assets/img/*", ["imageMin"]);
    gulp.watch("resources/assets/js/*.js", ["scripts"]);
});
