<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feed;
use App\Models\Pond;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CalculationHistory;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pondsCount = Pond::all()->count();
        $feedsCount = Feed::all()->count();
        $usersCount = User::all()->count();
        $calculationHistoriesCount = CalculationHistory::all()->count();

        $data = [
            'pondsCount' => $pondsCount,
            'feedsCount' => $feedsCount,
            'usersCount' => $usersCount,
            'calculationHistoriesCount' => $calculationHistoriesCount,
        ];

        return view('admin.dashboard')->with($data);
    }

}
