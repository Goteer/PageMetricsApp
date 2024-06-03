<?php

namespace App\Http\Controllers;

use App\Models\MetricHistoryRun;
use Illuminate\Http\Request;

class MetricHistoryRunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metric_run_history = MetricHistoryRun::all();
        return view('metric_run_history.index', compact('metric_run_history'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metric_run_history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|max:2000',
            'strategy_id' => 'required|integer',
          ]);
          MetricHistoryRun::create($request->all());
          return redirect()->route('metric_run_history.index')
            ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = MetricHistoryRun::find($id);
        return view('metric_run_history.show', compact('metric_run_history'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = MetricHistoryRun::find($id);
        $post->delete();
        return redirect()->route('metric_run_history.index')
        ->with('success', 'Metric Run History Entry deleted successfully');
    }
}
