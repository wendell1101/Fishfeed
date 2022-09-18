<?php

namespace App\Http\Controllers;

use App\Models\Pond;
use Illuminate\Http\Request;

class PondsInfoController extends Controller
{
    public function index()
    {
        $ponds = Pond::all();
        return view('ponds_info', compact('ponds'));
    }

    public function show($id)
    {
        $pond = Pond::find($id);
        return view('ponds_info_detail', compact('pond'));
    }
}
