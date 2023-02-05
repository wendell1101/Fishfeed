<?php

namespace App\Http\Controllers;

use App\Models\Pond;
use Illuminate\Http\Request;
use App\Models\MonitoringPond;

class MonitoringPondController extends Controller
{
    public function index(){
        $monitoringPonds = MonitoringPond::with('pond')->get();

        return view('monitoring_ponds', compact('monitoringPonds'));
    }
    public function create(){
        $ponds = Pond::all();
        return view('monitoring_ponds_create', compact('ponds'));
    }
    public function edit($id)
    {
        $monitoringPond = MonitoringPond::find($id);
        $ponds = Pond::all();
        return view('monitoring_ponds_edit', compact('monitoringPond', 'ponds'));
    }
    public function store(Request $request)
    {
        $created = MonitoringPond::create([
            'ponds_name' => $request->ponds_name,
            'date_started' => $request->date_started,
            'expected_date_harvest' => $request->expected_date_harvest,
            'abw' => $request->abw,
            'stock_fingerlings' => $request->stock_fingerlings,
            'pond_id' => $request->pond_id,
            'user_id' => auth()->id()
        ]);

        if($created){
            return redirect()->back()->with('success', 'Monitoring pond created successfully');
        }
    }

    public function update(Request $request, $id){
        
        $monitoringPond = MonitoringPond::find($id);
        $monitoringPond->abw = $request->abw;
        $monitoringPond->mortality = $request->mortality;
        $monitoringPond->date_of_sampling = $request->date_of_sampling;
        $monitoringPond->has_harvest = true;
        $updated = $monitoringPond->save();

        if($updated) return redirect()->back()->with('success', 'Monitoring pond has been updated successfully');
    }
}
