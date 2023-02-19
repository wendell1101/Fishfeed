<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pond;
use App\Helper\Helper;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use App\Models\MonitoringPond;

class MonitoringPondController extends Controller
{
    public function index()
    {
        $monitoringPonds = MonitoringPond::with('pond')->where('user_id', auth()->id())->get();
        $monitoringPonds->map(function($item){
            if($item->date_of_sampling){
                $item->date_of_sampling_formatted = Carbon::parse($item->date_of_sampling)->format('F d, Y');
                $item->date_of_sampling_from_now = Carbon::createFromFormat('Y-m-d', $item->date_of_sampling)->diffForHumans();
            }
        });

        return view('monitoring_ponds', compact('monitoringPonds'));
    }
    public function create()
    {
        $ponds = Pond::all();
        return view('monitoring_ponds_create', compact('ponds'));
    }
    public function edit($id)
    {
        $monitoringPond = MonitoringPond::find($id);
        $dateStarted = Carbon::parse($monitoringPond->date_started);
        $dateOfHarvest = Carbon::parse($monitoringPond->expected_date_harvest);

        $monthsDifference = $dateStarted->diffInMonths($dateOfHarvest);

        $diffMonths = [];
        $period = \Carbon\CarbonPeriod::create($dateStarted, '1 month', $dateOfHarvest);
        foreach ($period as $dt) {
            $diffMonths[] = Carbon::parse($dt->format("Y-m-d"))->endOfMonth()->toDateString();
        }

        $ponds = Pond::all();
        return view('monitoring_ponds_edit', compact('monitoringPond', 'ponds', 'diffMonths'));
    }

    public function getMonthListFromDate($start, $diff)
    {
        foreach (CarbonPeriod::create($start, "$diff month", $start) as $month) {
            $months[$month->format('m-Y')] = $month->format('F Y');
        }
        return $months;
    }
    public function store(Request $request)
    {
        $dateStarted = Carbon::parse($request->date_started);
        $dateOfHarvest = Carbon::parse($request->expected_date_harvest);

        $diffMonths = [];
        $period = \Carbon\CarbonPeriod::create($dateStarted, '1 month', $dateOfHarvest);
        foreach ($period as $dt) {
            $diffMonths[] = Carbon::parse($dt->format("Y-m-d"))->endOfMonth()->toDateString();
        }

        foreach ($diffMonths as $month) {
            MonitoringPond::create([
                'ponds_name' => $request->ponds_name,
                'date_started' => $request->date_started,
                'expected_date_harvest' => $request->expected_date_harvest,
                'abw' => $request->abw,
                'stock_fingerlings' => $request->stock_fingerlings,
                'date_of_sampling' => $month,
                'pond_id' => $request->pond_id,
                'user_id' => auth()->id()
            ]);
        }

        return redirect()->back()->with('success', 'Monitoring pond created successfully');
    }

    public function update(Request $request, $id)
    {
        $monitoringPond = MonitoringPond::find($id);
        $monitoringPond->abw = $request->abw;
        $monitoringPond->mortality = $request->mortality;
        // $monitoringPond->date_of_sampling = $request->date_of_sampling;
        $monitoringPond->has_harvest = true;
        $updated = $monitoringPond->save();

        if ($updated) return redirect()->back()->with('success', 'Monitoring pond has been updated successfully');
    }
}
