<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Document</title>
    <!-- Bootstrap Css -->
    {{-- <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
</head>

<style>
:root {
    --bs-blue: #1c84ee;
    --bs-indigo: #564ab1;
    --bs-purple: #6f42c1;
    --bs-red: #ef6767;
    --bs-orange: #fa5f1c;
    --bs-yellow: #ffcc5a;
    --bs-green: #34c38f;
    --bs-teal: #050505;
    --bs-cyan: #16daf1;
    --bs-white: #fff;
    --bs-gray: #74788d;
    --bs-gray-dark: #343a40;
    --bs-gray-100: #f8f9fa;
    --bs-gray-200: #e9e9ef;
    --bs-gray-300: #f6f6f6;
    --bs-gray-400: #ced4da;
    --bs-gray-500: #adb5bd;
    --bs-gray-600: #74788d;
    --bs-gray-700: #495057;
    --bs-gray-800: #343a40;
    --bs-gray-900: #2b3940;
    --bs-primary: #1c84ee;
    --bs-secondary: #74788d;
    --bs-success: #34c38f;
    --bs-info: #16daf1;
    --bs-warning: #ffcc5a;
    --bs-danger: #ef6767;
    --bs-pink: #e83e8c;
    --bs-light: #f6f6f6;
    --bs-dark: #2b3940;
    --bs-primary-rgb: 28,132,238;
    --bs-secondary-rgb: 116,120,141;
    --bs-success-rgb: 52,195,143;
    --bs-info-rgb: 22,218,241;
    --bs-warning-rgb: 255,204,90;
    --bs-danger-rgb: 239,103,103;
    --bs-pink-rgb: 232,62,140;
    --bs-light-rgb: 246,246,246;
    --bs-dark-rgb: 43,57,64;
    --bs-white-rgb: 255,255,255;
    --bs-black-rgb: 0,0,0;
    --bs-body-color-rgb: 73,80,87;
    --bs-body-bg-rgb: 244,245,248;
    --bs-font-sans-serif: "Be Vietnam Pro",sans-serif;
    --bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --bs-gradient: linear-gradient(180deg,hsla(0,0%,100%,0.15),hsla(0,0%,100%,0));
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 0.8125rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.5;
    --bs-body-color: #495057;
    --bs-body-bg: #f4f5f8;
}

body {
    margin: 0;
    display: block;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
*, :after, :before {
    box-sizing: border-box;
}

.bg-white {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important;
}

.vh-100 {
    height: 100vh!important;
}

.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x,12px);
    padding-left: var(--bs-gutter-x,12px);
    margin-right: auto;
    margin-left: auto;
}

.row {
    --bs-gutter-x: 24px;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y)*-1);
    margin-right: calc(var(--bs-gutter-x)*-0.5);
    margin-left: calc(var(--bs-gutter-x)*-0.5);
}

.bg-white {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-white-rgb),var(--bs-bg-opacity))!important;
}

.row>* {
    position: relative;
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x)*0.5);
    padding-left: calc(var(--bs-gutter-x)*0.5);
    margin-top: var(--bs-gutter-y);
}

.m-3 {
    margin: 1rem!important;
}

.col {
    flex: 1 0 0%;
}

.mt-3 {
    margin-top: 1rem!important;
}

.m-2 {
    margin: 0.5rem!important;
}

.border-0 {
    border: 0!important;
}

table {
    caption-side: bottom;
    border-collapse: collapse;
}

table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
    border-color: var(--bs-teal)!important;
}
.col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
}

.text-center {
    text-align: center!important;
}

.col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
}

.col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
}

.bg-secondary {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-secondary-rgb),var(--bs-bg-opacity))!important;
}

.text-light {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-light-rgb),var(--bs-text-opacity))!important;
}

.mb-5 {
    margin-bottom: 3rem!important;
}

.border-dark {
    border-color: var(--bs-teal)!important;
}

.border-bottom {
    border-bottom: 1px solid #e9e9ef!important;
}

.border-top {
    border-top: 1px solid #e9e9ef!important;
}

</style>

<body>
    <div class="container-fluid bg-white vh-100">
        <div class="row">
            <div class="col m-3" id="data_brg">
                <table class="border-0">
                    <tbody>
                    <tr><td>Nomor</td><td>&emsp;&emsp;:&nbsp;</td><td>{{ $resi->nomor }}</td></tr>
                    <tr><td>Tanggal/Datum/Date</td><td>&emsp;&emsp;:&nbsp;</td><td>{{ $resi->tanggal }}</td></tr>
                    <tr><td>Berat/Gewicht/Weight</td><td>&emsp;&emsp;:&nbsp;</td><td>{{ $resi->berat }}</td></tr>
                    <tr><td>Ukuran/Dimension/MaB</td><td>&emsp;&emsp;:&nbsp;</td><td>{{ $resi->ukuran }}</td></tr>
                    <tr><td>Isi/Contents/Inhalt</td><td>&emsp;&emsp;:&nbsp;</td><td>{{ $resi->isi }}</td></tr>
                    <tr><td>Layanan/Service</td><td>&emsp;&emsp;:&nbsp;</td><td>{{ $resi->layanan }}</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3 m-2">
            <div class="col-md-5">
                <div class="border-bottom border-top border-dark mb-5 text-center text-light bg-secondary" style="font-size: 20px;" id ="judul1">Pengirim</div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="text-center" style="font-size: 20px;">{{ $resi->pengirim }}</div>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('images/logos.jpg') }}" id="logo" alt="">
            </div>
            <div class="col-md-5">
                <div class="border-bottom border-top border-dark mb-5 text-center text-light bg-secondary " style="font-size: 20px;">Penerima</div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="border-bottom border-dark mb-5"></div>
                <div class="text-center" style="font-size: 20px;">{{ $resi->penerima }}</div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ URL::asset('/assets/libs/bootstrap/bootstrap.min.js') }}"></script> --}}
</body>

</html>
