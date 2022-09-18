<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\CalculationHistory;
use App\Models\User;
use Illuminate\Http\Request;

class AdminCalculationHistoryController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.calculation_histories.index', compact('users'));
    }

    public function getCalculationHistoryByUser($id){
        $user = User::find($id);
        $calculations = CalculationHistory::where('user_id', $user->id)->get();

        return view('admin.calculation_histories.show', compact('calculations', 'user'));
    }
}
