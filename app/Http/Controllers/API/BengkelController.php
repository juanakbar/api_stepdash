<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bengkel;

class BengkelController extends Controller
{
    public function index()
    {
        $bengkels = Bengkel::all();
        return response()->json($bengkels, 200);
    }
}
