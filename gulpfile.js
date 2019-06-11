const { src, dest } = require('gulp');

function copy() {
    const path = './vendor/almasaeed2010/adminlte/bower_components/'
    //déplacer tous les css
    src(path + 'bootstrap/dist/css/bootstrap.min.css').pipe(dest('./public/css/'));
    src(path + 'font-awesome/css/font-awesome.min.css').pipe(dest('./public/css/'));
    src(path + 'Ionicons/css/ionicons.min.css').pipe(dest('./public/css/'));
    src('./vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css').pipe(dest('./public/css/'));
    src('./vendor/almasaeed2010/adminlte/dist/css/skins/_all-skins.min.css').pipe(dest('./public/css/'));
    src(path + 'morris.js/morris.css').pipe(dest('./public/css/'));
    src(path + 'jvectormap/jquery-jvectormap.css').pipe(dest('./public/css/'));
    src(path + 'bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css').pipe(dest('./public/css/'));
    src(path + 'bootstrap-daterangepicker/daterangepicker.css').pipe(dest('./public/css/'));
    src('./vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css').pipe(dest('./public/css/'));
    //javascritp
    src(path + 'jquery/dist/jquery.min.js').pipe(dest('./public/js/'));
    src(path + 'jquery-ui/jquery-ui.min.js').pipe(dest('./public/js/'));
    src(path + 'bootstrap/dist/js/bootstrap.min.js').pipe(dest('./public/js/'));
    src(path + 'raphael/raphael.min.js').pipe(dest('./public/js/'));
    src(path + 'morris.js/morris.min.js').pipe(dest('./public/js/'));
    src(path + 'jquery-sparkline/dist/jquery.sparkline.min.js').pipe(dest('./public/js/'));
    src('./vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js').pipe(dest('./public/js/'));
    src('./vendor/almasaeed2010/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js').pipe(dest('./public/js/'));
    src(path + 'jquery-knob/dist/jquery.knob.min.js').pipe(dest('./public/js/'));
    src(path + 'moment/min/moment.min.js').pipe(dest('./public/js/'));
    src(path + 'bootstrap-daterangepicker/daterangepicker.js').pipe(dest('./public/js/'));
    src(path + 'bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js').pipe(dest('./public/js/'));
    src('./vendor/almasaeed2010/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js').pipe(dest('./public/js/'));
    src(path + 'jquery-slimscroll/jquery.slimscroll.min.js').pipe(dest('./public/js/'));
    src(path + 'fastclick/lib/fastclick.js').pipe(dest('./public/js/'));
    src('./vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js').pipe(dest('./public/js/'));
    src('./vendor/almasaeed2010/adminlte/dist/js/pages/dashboard.js').pipe(dest('./public/js/'));
    return src('./vendor/almasaeed2010/adminlte/dist/js/demo.js').pipe(dest('./public/js/'));
}
exports.default = copy