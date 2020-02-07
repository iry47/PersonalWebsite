/**
 *
 * GUPL File
 *
 **/

var gulp            = require("gulp");
var sass            = require("gulp-sass");
var autoprefixer    = require("gulp-autoprefixer");
var cleanCSS        = require("gulp-clean-css");
var jsmin           = require("gulp-jsmin");

gulp.task("watch", () => {
	gulp.watch("assets/stylesheets/scss/*", gulp.series("css"));
	//gulp.watch("assets/scripts/js/*", gulp.series("js"));
});

/* CSS / SASS */
gulp.task("css", () => {
	return gulp.src("assets/stylesheets/scss/*.{css,scss}")
		.pipe(sass().on("error", sass.logError))
		.pipe(autoprefixer(
			"last 2 version",
			"> 1%",
			"safari 5",
			"ie 8",
			"ie 9",
			"opera 12.1",
			"ios 6",
			"android 4"
		))
		.pipe(cleanCSS({
			compatibility: "ie9",
			processImport: false
		}))
		.pipe(gulp.dest("./assets/stylesheets/"));
});

/* JS script */
// gulp.task("js", () => {
// 	return gulp.src("assets/js/*.js")
// 		.pipe(jsmin())
// 		//.pipe(rename({suffix: ".min"}))
// 		.pipe(gulp.dest("."));
// });

gulp.task("default", gulp.parallel('css'));

