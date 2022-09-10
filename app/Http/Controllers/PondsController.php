<?php

namespace App\Http\Controllers;

use App\Models\Pond;
use Illuminate\Http\Request;

class PondsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ponds = Pond::all();
        return view('admin.ponds.index')->with('ponds', $ponds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ponds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pond = new Pond();   
        $image = $pond->storeImage($request->image);
        Pond::create([
            'name' => $request->name,
            'type' => $request->type,
            'image' => $image,
            'description' => $request->description,
        ]);
        return redirect()->route('ponds.index')->with('success', 'Pond has been created successfully');
    }

    public function edit(Pond $pond)
    {
        return view('admin.ponds.edit', compact('pond'));
    }

    public function update(Request $request, Pond $pond)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description
        ];
        if($request->hasFile('image')){  
            $pond->deleteExistingImage();
            $data['image'] = $pond->storeImage($request->image);         
        }
        $pond->update($data);

        return redirect()->route('ponds.index')->with('success', 'Pond has been updated successfully');
    }

    public function delete(Pond $pond)
    {
        return view('admin.ponds.delete', compact('pond'));
    }

    public function destroy(Pond $pond)
    {
        $pond->delete();
        return redirect()->route('ponds.index')->with('success', 'Pond has been deleted successfully');
    }
}
