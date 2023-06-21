<?php

namespace App\Http\Controllers\Admin\Resources;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedController extends Controller
{

    public function index()
    {
        $feeds = Feed::get();
        return view('auth.feeds.index',compact('feeds'));
    }

    public function create()
    {
        return view('auth.feeds.form');
    }

    public function store(Request $request)
    {
        $params = $request->all();

        unset($params['img']);

        if($request->has('img')){
            $path = $request->file('img')->store('feeds');
            $params['img'] = $path;
        }

        Feed::create($params);
        return redirect()->route('feeds.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    public function edit(Feed $feed)
    {
        return view('auth.feeds.form',compact('feed'));
    }


    public function update(Request $request, Feed $feed)
    {
        $params = $request->all();

        unset($params['img']);

        if($request->has('img')){
            Storage::delete($feed->img);
            $path = $request->file('img')->store('feeds');
            $params['img'] = $path;
        }
        $feed->update($params);
        return redirect()->route('feeds.index');
    }


    public function destroy(Feed $feed)
    {
        Storage::delete($feed->img);
        $feed->delete();
        return redirect()->route('feeds.index');
    }
}
