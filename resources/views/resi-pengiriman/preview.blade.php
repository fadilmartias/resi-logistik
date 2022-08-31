<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html">
    <title>Document</title>
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
</head>

<style>
    *, html {
        margin: 0px;
        padding: 0px;
    }
    #data_brg {
        font-size: 20px;
    }

    table {
        border:0;
    }
    #logo {
        height: 330px;
        width: 160px;
    }
    #judul1 {
        font-size: 20px;
    }
</style>

<body>
    <div class="container-fluid bg-white vh-100 d-flex">
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
            <div class="col-md-2">
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
    <script src="{{ URL::asset('/assets/libs/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
