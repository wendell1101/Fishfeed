<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedsInfoController extends Controller
{
    public function index()
    {
        $feeds = Feed::all();
        return view('feeds_info', compact('feeds'));
    }
}
