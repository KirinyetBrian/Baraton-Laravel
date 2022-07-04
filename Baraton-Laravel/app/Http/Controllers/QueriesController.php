<?php

namespace App\Http\Controllers;

use App\Models\Queries;
use Illuminate\Http\Request;

class QueriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Log::info($request);
        $store_queries=Queries::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' =>$request->message,

        ]);

        if($store_queries)
        {
            return back()->with('success','Your message was sent successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Queries  $queries
     * @return \Illuminate\Http\Response
     */
    public function show(Queries $queries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queries  $queries
     * @return \Illuminate\Http\Response
     */
    public function edit(Queries $queries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queries  $queries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queries $queries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queries  $queries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queries $queries)
    {
        //
    }
}
