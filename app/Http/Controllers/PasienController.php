<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function store(request $request)
    {
        $pasien = Pasien::create($request->all());
        return response()->json($pasien);
    }
}
