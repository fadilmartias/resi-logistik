<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function welcome()
    {
        return view('landing');
    }

    public function lacak(Request $request)
    {
        $validatedData = $request->validate([
            'nomor' => 'exists:resis,nomor'
        ]);

        $history = History::with('resi')->where('nomor_resi', $validatedData['nomor'])->get();

        return view('lacak', [
            'history' => $history,
        ]);
    }



    public function index()
    {
        return view('index');
    }
}
