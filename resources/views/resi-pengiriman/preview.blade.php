<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html">
    <title>File Name</title>
</head>

<style>
    .table {
        width: 350px;
        margin-top: 10px;
    }

    .bg {
        background-color: gray;
        color: white;
        margin-bottom: 10pt;
    }

    hr {
        line-height: 1pt;
        color: #000;
    }

    td {
        margin-bottom: 200cm;
    }

    .tr {
        line-height: 20px;
        border-bottom: 1px solid black;
    }

    .nama {
        text-align: center;
    }

    .logo {
        height: 100px;
        transform: rotate(-90deg);
    }

    .tb-center {
        width: 100pt;
        padding-left: 110pt;
        /* margin-left: 25px; */
        /* margin-right: 25px; */
    }

    .main {
        width: 75%;
    }

    #table-penerima {
        /* margin-right : 50px; */
    }

    #table-pengirim {
        /* margin-right : 10px; */
    }

</style>

<body>
    <div class="container-fluid bg-white vh-100">
        <div class="row">
            <div class="col m-3" id="data_brg">
                <table class="border-0">
                    <tbody>
                        <tr>
                            <td>Nomor</td>
                            <td>&emsp;&emsp;:&nbsp;</td>
                            <td>{{ $resi->nomor }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal/Datum/Date</td>
                            <td>&emsp;&emsp;:&nbsp;</td>
                            <td>{{ $resi->tanggal }}</td>
                        </tr>
                        <tr>
                            <td>Berat/Gewicht/Weight</td>
                            <td>&emsp;&emsp;:&nbsp;</td>
                            <td>{{ $resi->berat }}</td>
                        </tr>
                        <tr>
                            <td>Ukuran/Dimension/MaB</td>
                            <td>&emsp;&emsp;:&nbsp;</td>
                            <td>{{ $resi->ukuran }}</td>
                        </tr>
                        <tr>
                            <td>Isi/Contents/Inhalt</td>
                            <td>&emsp;&emsp;:&nbsp;</td>
                            <td>{{ $resi->isi }}</td>
                        </tr>
                        <tr>
                            <td>Layanan/Service</td>
                            <td>&emsp;&emsp;:&nbsp;</td>
                            <td>{{ $resi->layanan }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <table class="main">
            <tr>
                <td>
                    <div class="row">

                        <table class="table" id="table-pengirim">
                            <tr class="bg">
                                <th>Pengirim</th>
                            </tr>

                            @for($i = 0; $i < 5; $i++) <tr>
                                <tr>
                                    <td class="tr">
                                        &nbsp;
                                    </td>
                                </tr>
                                @endfor
                                <tr>
                                    <td class="nama">
                                        {{ $resi->pengirim }}
                                    </td>
                                </tr>
                        </table>


                    </div>
                </td>

                <td class="tb-center">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/logos.jpg') }}" id="logo" class="logo">
                            </td>
                        </tr>
                    </table>

                </td>

                <td>
                    <div class="row">

                        <table class="table" id="table-penerima">
                            <tr class="bg">
                                <th>Penerima</th>
                            </tr>

                            @for($i = 0; $i < 5; $i++) <tr>
                                <tr>
                                    <td class="tr">
                                        &nbsp;
                                    </td>
                                </tr>
                                @endfor
                                <tr>
                                    <td class="nama">
                                        {{ $resi->penerima }}
                                    </td>
                                </tr>
                        </table>

                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
