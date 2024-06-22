<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::with('levelkamar')->where('status', 'tersedia')->get();
        return response()->json($kamars);
    }
}
