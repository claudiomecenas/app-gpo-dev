<?php

namespace App\Http\Controllers;

use App\Models\MarketSegment;

use Illuminate\Http\Request;

class MarketSegmentController extends Controller
{
  
    public function index()
    {
        $marketSegment = MarketSegment::all()->sortByDesc('id');
        return view('market-segment', compact('marketSegment'));
        //return view('market-segment.index', ['marketSegment' => $marketSegment]);

    }

   
    public function store(Request $request)
    {   
        $marketSegment = new MarketSegment();
        $marketSegment->description = $request->description;
        $marketSegment->save();
        return redirect()->route('market-segment.store');
    }

   
    public function edit(MarketSegment $marketSegment, string  $id)
    {
        if (!$marketSegment = $marketSegment->find($id)) {
            return redirect()->back();
        }

        return view('market-segment-edit', compact('marketSegment'));
    }

    public function show(MarketSegment $marketSegment, string $id)
    {
        if (!$marketSegment = $marketSegment->find($id)) {
            return redirect()->back();
        }

        return view('market-segment-show', compact('marketSegment'));
    }

   
    public function update(Request $request, string $id)
    {
        if (!$marketSegment = MarketSegment::find($id)) {
            return redirect()->back();
        }

        $marketSegment->update($request->only(['description']));

        return redirect()->route('market-segment.index');
    }

    
    public function destroy(string $id)
    {
        if (!$marketSegment = MarketSegment::find($id)) {
            return redirect()->back();
        }
        
        $marketSegment->delete();
        return redirect()->route('market-segment.index');
    }
}
