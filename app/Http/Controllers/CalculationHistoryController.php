<?php

namespace App\Http\Controllers;

use App\Models\CalculationHistory;
use Illuminate\Http\Request;

class CalculationHistoryController extends Controller
{
    public function index()
    {
        $calculationHistories = CalculationHistory::where('user_id', auth()->id())->orderBy('created_at', 'DESC')->paginate(10);
        return view('calculation_history', compact('calculationHistories'));
    }

    public function store(Request $request){
        $request->validate([
            'calculation_name' => 'required',
            'result' => 'required',
        ]);

        return CalculationHistory::create([
            'calculation_name' => $request->calculation_name,
            'result' => $request->result,
            'user_id' => auth()->id()
        ]);
    }
}
