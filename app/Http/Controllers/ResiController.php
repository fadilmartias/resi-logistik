<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use App\Models\History;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Dompdf\Dompdf;

class ResiController extends Controller
{

    // ROLE ADMIN

    public function index()
    {
        $resi = Resi::with('history')->get();
        $jmlh_resi = Resi::count();
        $history = History::with(['resi'])->get();

        return view('resi-pengiriman.index', [
            'resi' => $resi,
            'history' => $history,
            'jmlh_resi' => $jmlh_resi,
        ]);
    }


    public function create()
    {
        return view('resi-pengiriman.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'berat' => 'required',
            'ukuran' => 'required',
            'isi' => 'required',
            'layanan' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'lokasi' => 'required',
        ]);

        $nomor_resi = rand(1000000000,9999999999);

        History::create([
            'nomor_resi' => $nomor_resi,
            'status' => 'Barang telah dipacking dan siap dijemput oleh kurir',
            'lokasi' => $validatedData['lokasi'],
        ]);

        $history = History::latest()->first();

        Resi::create([
            'nomor' => $nomor_resi,
            'tanggal'   => $validatedData['tanggal'],
            'berat'   => $validatedData['berat'],
            'ukuran' => $validatedData['ukuran'],
            'isi'   => $validatedData['isi'],
            'layanan' => $validatedData['layanan'],
            'pengirim' => $validatedData['pengirim'],
            'penerima' => $validatedData['penerima'],
            'history_id' => $history->id
        ]);

        return to_route('resi-pengiriman.index');
    }


    public function show()
    {

        // $resi = Resi::findOrFail($id);
    //     $data = Resi::get();

    //     $pdf = Pdf::loadView('resi-pengiriman.index', $data);
    //     return $pdf->download('invoice.pdf');
    //
    }

    public function print($id)
    {
        $resi = Resi::findOrFail($id);

            // return view('resi-pengiriman.preview', [
            //     'resi' => $resi,
            // ]);

        $pdf = Pdf::loadView('resi-pengiriman.preview', ['resi' => $resi]);
        return $pdf->stream('resi.pdf');

        // $customPaper = array(0,0,300,900);
        // $pdf = App::make('dompdf.wrapper');
        // $pdf = new Dompdf();
        // $html = view('resi-pengiriman.preview', ['resi' => $resi])->render();
        // $pdf->loadHtml($html);
        // $pdf->setPaper('A4', 'landscape');
        // $pdf->render();
        // return $pdf->stream('invoice.pdf');


    }


    public function edit($id)
    {

        $data = Resi::findOrFail($id);

        return view('resi-pengiriman.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $resi = Resi::findOrFail($id);

        $validatedData = $request->validate([
            'tanggal' => 'required',
            'berat' => 'required',
            'ukuran' => 'required',
            'isi' => 'required',
            'layanan' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
        ]);

        $resi->update([
            'tanggal'   => $validatedData['tanggal'],
            'berat'   => $validatedData['berat'],
            'ukuran' => $validatedData['ukuran'],
            'isi'   => $validatedData['isi'],
            'layanan' => $validatedData['layanan'],
            'pengirim' => $validatedData['pengirim'],
            'penerima' => $validatedData['penerima'],
        ]);

        History::create([
            'nomor_resi' => $resi->nomor,
            'status' => $validatedData['status'],
            'lokasi' => $validatedData['lokasi'],
        ]);

        $latest = History::latest()->first();

            $resi->update([
                'history_id' => $latest->id,
            ]);

        return to_route('resi-pengiriman.index');
    }


    public function destroy($id)
    {
        $data = Resi::findOrFail($id);
        $data->delete();

        return to_route('resi-pengiriman.index')->with('success', 'Data Berhasil Dihapus');
    }

    // ROLE GUDANG

    public function check(Request $request, $id)
    {
        $data = Resi::findOrFail($id);
        $history = History::with('resi')->where('nomor_resi', $data->nomor)->latest()->first();

            History::create([
                'nomor_resi' => $data->nomor,
                'status' => 'Barang telah diterima oleh penerima',
                'lokasi' => $history->lokasi,
            ]);

            $latest = History::latest()->first();

            $data->update([
                'history_id' => $latest->id,
            ]);

            return to_route('resi-pengiriman.index');
    }

    public function cancel(Request $request, $id)
    {
        $data = Resi::findOrFail($id);
        $history = History::with('resi')->where('nomor_resi', $data->nomor)->latest()->first();

            History::create([
                'nomor_resi' => $data->nomor,
                'status' => 'Pengiriman barang dibatalkan oleh kurir',
                'lokasi' => $history->lokasi,
            ]);

            $latest = History::latest()->first();

            $data->update([
                'history_id' => $latest->id,
            ]);

        return to_route('resi-pengiriman.index');
    }
}
