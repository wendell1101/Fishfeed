<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = Feed::all();
        return view('admin.feeds.index')->with('feeds', $feeds);
    }

    public function show(Feed $feed)
    {
        return view('admin.feeds.show', compact('feed'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feed = new Feed();   
        $image = $feed->storeImage($request->image);
        Feed::create([
            'name' => $request->name,
            'type' => $request->type,
            'image' => $image,
            'description' => $request->description,
        ]);
        return redirect()->route('feeds.index')->with('success', 'Feed has been created successfully');
    }

    public function edit(Feed $feed)
    {
        return view('admin.feeds.edit', compact('feed'));
    }

    public function update(Request $request, Feed $feed)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description
        ];
        if($request->hasFile('image')){  
            $feed->deleteExistingImage();
            $data['image'] = $feed->storeImage($request->image);         
        }
        $feed->update($data);

        return redirect()->route('feeds.index')->with('success', 'Feed has been updated successfully');
    }

    public function delete(Feed $feed)
    {
        return view('admin.feeds.delete', compact('feed'));
    }

    public function destroy(Feed $feed)
    {
        $feed->delete();
        return redirect()->route('feeds.index')->with('success', 'Feed has been deleted successfully');
    }
}
