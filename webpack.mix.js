const mix = require('laravel-mix');
const lodash = require("lodash");
const WebpackRTLPlugin = require('webpack-rtl-plugin');
const folder = {
    src: "resources/", // source files
    dist: "public/", // build files
    dist_assets: "public/assets/" //build assets files
};

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

var third_party_assets = {
    css_js: [
        { "name": "@ckeditor", "assets": ["./node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"] },
        { "name": "@curiosityx", "assets": ["./node_modules/@curiosityx/bootstrap-session-timeout/index.js"] },
        {
            "name": "@fullcalendar",
            "assets": [
                "./node_modules/@fullcalendar/core/main.min.js",
                "./node_modules/@fullcalendar/daygrid/main.min.js",
                "./node_modules/@fullcalendar/bootstrap/main.min.js",
                "./node_modules/@fullcalendar/timegrid/main.min.js",
                "./node_modules/@fullcalendar/interaction/main.min.js",
                "./node_modules/@fullcalendar/core/main.min.css",
                "./node_modules/@fullcalendar/bootstrap/main.min.css",
                "./node_modules/@fullcalendar/daygrid/main.min.css",
                "./node_modules/@fullcalendar/timegrid/main.min.css",
            ]
        },
        {
            "name": "@simonwep",
            "assets": ["./node_modules/@simonwep/pickr/dist/pickr.es5.min.js",
                "./node_modules/@simonwep/pickr/dist/pickr.min.js",
                "./node_modules/@simonwep/pickr/dist/themes/classic.min.css",
                "./node_modules/@simonwep/pickr/dist/themes/monolith.min.css",
                "./node_modules/@simonwep/pickr/dist/themes/nano.min.css",
            ]
        },
        {
            "name": "admin-resources",
            "assets": ["./node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js",
                "./node_modules/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js",
                "./node_modules/admin-resources/rwd-table/rwd-table.min.js",
                "./node_modules/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css",
                "./node_modules/admin-resources/rwd-table/rwd-table.min.css",
            ]
        },
        {
            "name": "alertifyjs",
            "assets": ["./node_modules/alertifyjs/build/alertify.min.js",
                "./node_modules/alertifyjs/build/css/alertify.min.css",
                "./node_modules/alertifyjs/build/css/themes/default.min.css"
            ]
        },
        { "name": "apexcharts", "assets": ["./node_modules/apexcharts/dist/apexcharts.min.js"] },
        { "name": "table-edits", "assets": ["./node_modules/table-edits/build/table-edits.min.js"] },
        {
            "name": "bootstrap-datepicker",
            "assets": ["./node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
                "./node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
            ]
        },
        {
            "name": "bootstrap-touchspin",
            "assets": ["./node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js",
                "./node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css"
            ]
        },
        { "name": "bootstrap", "assets": ["./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"] },
        { "name": "chart.js", "assets": ["./node_modules/chart.js/dist/Chart.bundle.min.js"] },
        {
            "name": "choices.js",
            "assets": ["./node_modules/choices.js/public/assets/scripts/choices.min.js",
                "./node_modules/choices.js/public/assets/styles/choices.min.css"
            ]
        },
        {
            "name": "datatables.net-bs4",
            "assets": ["./node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js",
                "./node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css"
            ]
        },
        {
            "name": "datatables.net",
            "assets": ["./node_modules/datatables.net/js/jquery.dataTables.min.js"]
        },
        {
            "name": "datatables.net-buttons-bs4",
            "assets": ["./node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js",
                "./node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
            ]
        },
        {
            "name": "datatables.net-buttons",
            "assets": [
                "./node_modules/datatables.net-buttons/js/dataTables.buttons.min.js",
                "./node_modules/datatables.net-buttons/js/buttons.html5.min.js",
                "./node_modules/datatables.net-buttons/js/buttons.print.min.js",
                "./node_modules/datatables.net-buttons/js/buttons.colVis.min.js",
            ]
        },
        {
            "name": "datatables.net-responsive-bs4",
            "assets": ["./node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js",
                "./node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css",
            ]
        },
        { "name": "datatables.net-responsive", "assets": ["./node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"] },
        { "name": "datatables.net", "assets": ["./node_modules/datatables.net/js/jquery.dataTables.min.js"] },
        {
            "name": "dropzone",
            "assets": ["./node_modules/dropzone/dist/min/dropzone.min.js",
                "./node_modules/dropzone/dist/min/dropzone.min.css"
            ]
        },
        {
            "name": "dragula",
            "assets": ["./node_modules/dragula/dist/dragula.min.css",
                "./node_modules/dragula/dist/dragula.min.js"
            ]
        },
        { "name": "echarts", "assets": ["./node_modules/echarts/dist/echarts.min.js"] },
        { "name": "feather-icons", "assets": ["./node_modules/feather-icons/dist/feather.min.js"] },
        {
            "name": "flatpickr",
            "assets": ["./node_modules/flatpickr/dist/flatpickr.min.js",
                "./node_modules/flatpickr/dist/flatpickr.min.css"
            ]
        },
        {
            "name": "glightbox",
            "assets": ["./node_modules/glightbox/dist/js/glightbox.min.js",
                "./node_modules/glightbox/dist/css/glightbox.min.css"
            ]
        },
        { "name": "gmaps", "assets": ["./node_modules/gmaps/gmaps.min.js"] },
        { "name": "imask", "assets": ["./node_modules/imask/dist/imask.min.js"] },
        { "name": "jquery-countdown", "assets": ["./node_modules/jquery-countdown/dist/jquery.countdown.min.js"] },
        { "name": "jquery-knob", "assets": ["./node_modules/jquery-knob/dist/jquery.knob.min.js"] },
        { "name": "jquery-sparkline", "assets": ["./node_modules/jquery-sparkline/jquery.sparkline.min.js"] },
        { "name": "jquery-validation", "assets": ["./node_modules/jquery-validation/dist/jquery.validate.min.js"] },
        { "name": "jquery.repeater", "assets": ["./node_modules/jquery.repeater/jquery.repeater.min.js"] },
        { "name": "jquery", "assets": ["./node_modules/jquery/dist/jquery.min.js"] },
        { "name": "jszip", "assets": ["./node_modules/jszip/dist/jszip.min.js"] },
        { "name": "leaflet", "assets": ["./node_modules/leaflet/dist/leaflet.js", "./node_modules/leaflet/dist/leaflet.css"] },

        { "name": "masonry-layout", "assets": ["./node_modules/masonry-layout/dist/masonry.pkgd.min.js"] },
        { "name": "metismenu", "assets": ["./node_modules/metismenu/dist/metisMenu.min.js"] },
        { "name": "node-waves", "assets": ["./node_modules/node-waves/dist/waves.min.js"] },
        {
            "name": "nouislider",
            "assets": ["./node_modules/nouislider/dist/nouislider.min.js",
                "./node_modules/nouislider/dist/nouislider.min.css"
            ]
        },
        { "name": "pace-js", "assets": ["./node_modules/pace-js/pace.min.js"] },
        {
            "name": "pdfmake",
            "assets": ["./node_modules/pdfmake/build/pdfmake.min.js",
                "./node_modules/pdfmake/build/vfs_fonts.js"
            ]
        },
        { "name": "pristinejs", "assets": ["./node_modules/pristinejs/dist/pristine.min.js"] },
        { "name": "rater-js", "assets": ["./node_modules/rater-js/index.js"] },
        {
            "name": "select2",
            "assets": ["./node_modules/select2/dist/js/select2.min.js",
                "./node_modules/select2/dist/css/select2.min.css"
            ]
        },
        { "name": "simplebar", "assets": ["./node_modules/simplebar/dist/simplebar.min.js"] },
        {
            "name": "sweetalert2",
            "assets": ["./node_modules/sweetalert2/dist/sweetalert2.min.js",
                "./node_modules/sweetalert2/dist/sweetalert2.min.css"
            ]
        },
        {
            "name": "swiper",
            "assets": ["./node_modules/swiper/swiper-bundle.min.js",
                "./node_modules/swiper/swiper-bundle.min.css"
            ]
        },
        { "name": "tinymce", "assets": ["./node_modules/tinymce/tinymce.min.js"] },
        {
            "name": "twitter-bootstrap-wizard",
            "assets": ["./node_modules/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js",
                "./node_modules/twitter-bootstrap-wizard/prettify.js",
                "./node_modules/twitter-bootstrap-wizard/prettify.css"
            ]
        },
        { "name": "wnumb", "assets": ["./node_modules/wnumb/wNumb.min.js"] },
    ]
};

//copying third party assets
lodash(third_party_assets).forEach(function(assets, type) {
    if (type == "css_js") {
        lodash(assets).forEach(function(plugin) {
            var name = plugin['name'],
                assetlist = plugin['assets'],
                css = [],
                js = [];
            lodash(assetlist).forEach(function(asset) {
                var ass = asset.split(',');
                for (let i = 0; i < ass.length; ++i) {
                    if (ass[i].substr(ass[i].length - 3) == ".js") {
                        js.push(ass[i]);
                    } else {
                        css.push(ass[i]);
                    }
                };
            });
            if (js.length > 0) {
                mix.combine(js, folder.dist_assets + "/libs/" + name + "/" + name + ".min.js");
            }
            if (css.length > 0) {
                mix.combine(css, folder.dist_assets + "/libs/" + name + "/" + name + ".min.css");
            }
        });
    }
});

// mix.copyDirectory("./node_modules/tinymce", folder.dist_assets + "/libs/tinymce");
// mix.copyDirectory("./node_modules/leaflet/dist/images", folder.dist_assets + "/libs/leaflet/images");
// mix.copyDirectory("./node_modules/bootstrap-editable/img", folder.dist_assets + "/libs/img");

// copy all fonts
var out = folder.dist_assets + "fonts";
mix.copyDirectory(folder.src + "fonts", out);

// copy all images
var out = folder.dist_assets + "images";
mix.copyDirectory(folder.src + "images", out);

mix.sass('resources/scss/bootstrap.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/bootstrap.css");
mix.sass('resources/scss/icons.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/icons.css");
mix.sass('resources/scss/app.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/app.css");
mix.sass('resources/scss/preloader.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/preloader.css");

// mix.sass('resources/scss/bootstrap-dark.scss', folder.dist_assets + "css").minify(folder.dist_assets + "css/bootstrap-dark.css");
// mix.sass('resources/scss/app-dark.scss', folder.dist_assets + "css").options({ processCssUrls: false }).minify(folder.dist_assets + "css/app-dark.css");

mix.webpackConfig({
    plugins: [
        new WebpackRTLPlugin()
    ]
});


//copying demo pages related assets
var app_pages_assets = {
    js: [
        folder.src + "js/pages/alert.init.js",
        folder.src + "js/pages/apexcharts.init.js",
        folder.src + "js/pages/calendar.init.js",
        folder.src + "js/pages/chartjs.init.js",
        folder.src + "js/pages/coming-soon.init.js",
        folder.src + "js/pages/dashboard.init.js",
        folder.src + "js/pages/datatable-pages.init.js",
        folder.src + "js/pages/datatables.init.js",
        folder.src + "js/pages/echarts.init.js",
        folder.src + "js/pages/ecommerce-cart.init.js",
        folder.src + "js/pages/ecommerce-select2.init.js",
        folder.src + "js/pages/ecommerce-shop.init.js",
        folder.src + "js/pages/email-editor.init.js",
        folder.src + "js/pages/feather-icon.init.js",
        folder.src + "js/pages/fontawesome.init.js",
        folder.src + "js/pages/form-advanced.init.js",
        folder.src + "js/pages/form-editor.init.js",
        folder.src + "js/pages/form-mask.init.js",
        // folder.src + "js/pages/form-wizard.init.js",
        folder.src + "js/pages/gmaps.init.js",
        folder.src + "js/pages/jquery-knob.init.js",
        folder.src + "js/pages/leaflet-map.init.js",
        // folder.src + "js/pages/leaflet-us-states.js",
        folder.src + "js/pages/lightbox.init.js",
        folder.src + "js/pages/materialdesign.init.js",
        folder.src + "js/pages/modal.init.js",
        folder.src + "js/pages/notification.init.js",
        folder.src + "js/pages/pass-addon.init.js",
        folder.src + "js/pages/product-filter-range.init.js",
        folder.src + "js/pages/profile.init.js",
        folder.src + "js/pages/rangeslider.init.js",
        folder.src + "js/pages/rating.init.js",
        folder.src + "js/pages/session-timeout.init.js",
        folder.src + "js/pages/sparklines.init.js",
        folder.src + "js/pages/sweetalert.init.js",
        folder.src + "js/pages/table-editable.int.js",
        folder.src + "js/pages/table-responsive.init.js",
        folder.src + "js/pages/task-create.init.js",
        folder.src + "js/pages/task-form.init.js",
        folder.src + "js/pages/task-kanban.init.js",
        folder.src + "js/pages/tasklist.init.js",
        folder.src + "js/pages/two-step-verification.init.js",
        folder.src + "js/pages/validation.init.js",
        folder.src + "js/pages/vector-maps.init.js",
        folder.src + "js/pages/form-validation.init.js",
    ]
};

var out = folder.dist_assets + "js/";
lodash(app_pages_assets).forEach(function(assets, type) {
    for (let i = 0; i < assets.length; ++i) {
        mix.js(assets[i], out + "pages");
    };
});

mix.combine('resources/js/app.js', folder.dist_assets + "js/app.min.js");
mix.combine('resources/js/pages/leaflet-us-states.js', folder.dist_assets + "js/pages/leaflet-us-states.js");
mix.combine('resources/js/pages/form-wizard.init.js', folder.dist_assets + "js/pages/form-wizard.init.js");