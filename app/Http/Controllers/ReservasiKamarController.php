<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\ReservasiKamar;
use Illuminate\Http\Request;

class ReservasiKamarController extends Controller
{
    public function store(Request $request)
    {
        $reservasi = ReservasiKamar::create($request->all());
        Kamar::where('id', $request->kamar_id)->update(['status' => 'tidak tersedia']);
    }

    public function update(Request $request, $id)
    {
        $reservasi = ReservasiKamar::find($id);
        $reservasi->update(['tanggal_keluar' => $request->tanggal_keluar]);
        Kamar::where('id', $reservasi->kamar_id)->update(['status' => 'tersedia']);
        return response()->json($reservasi);
    }
}
