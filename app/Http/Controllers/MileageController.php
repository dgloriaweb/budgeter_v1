<?php

namespace App\Http\Controllers;

use App\Models\Mileage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MileageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Mileages/Index', [
            //
        ]);
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
        $validated = $request->validate([
            'date',
            'mileage',
            'partner_id',
            'location_id_start',
            'location_id_end',
            'is_personal',
            'comments' => 'required|string|max:255',
        ]);

        $request->user()->mileages()->create($validated);

        return redirect(route('mileages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function show(Mileage $mileage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function edit(Mileage $mileage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mileage $mileage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mileage  $mileage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mileage $mileage)
    {
        //
    }
}
