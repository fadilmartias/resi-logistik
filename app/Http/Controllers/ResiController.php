<?php

namespace App\Http\Controllers;

// use Barryvdh\DomPDF\PDF;
use App\Models\Resi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ResiController extends Controller
{

    public function index()
    {
        $resi = Resi::orderBy('nomor', 'desc')->get();
        $jmlh_resi = Resi::count();

        return view('resi-pengiriman.index', [
            'resi' => $resi,
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
        ]);

        $nomor_resi = rand(1000000000,9999999999);

        Resi::create([
            'nomor' => $nomor_resi,
            'tanggal'   => $validatedData['tanggal'],
            'berat'   => $validatedData['berat'],
            'ukuran' => $validatedData['ukuran'],
            'isi'   => $validatedData['isi'],
            'layanan' => $validatedData['layanan'],
            'pengirim' => $validatedData['pengirim'],
            'penerima' => $validatedData['penerima'],
            'status' => 'Menunggu barang dijemput oleh driver',
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


        // $customPaper = array(0,0,600,300);
        // $pdf = App::make('snappy.pdf.wrapper');
        // $html = view('resi-pengiriman.preview', ['resi' => $resi])->render();
        // $pdf->loadHtml($html);
        // $pdf->setPaper('A4', 'landscape');
        // $pdf->render();
        // return $pdf->('invoice.pdf');

        // $pdf = PDF::loadView('resi-pengiriman.preview', ['resi' => $resi]);
        // return $pdf->inline('invoice.pdf');
    }


    public function edit(Resi $resi)
    {
        //
    }

    public function update(Request $request, Resi $resi)
    {
        //
    }


    public function destroy($id)
    {
        $data = Resi::findOrFail($id);
        $data->delete();

        return to_route('resi-pengiriman.index')->with('success', 'Data Berhasil Dihapus');
    }
}
