<?php

namespace App\Http\Controllers;

use App\Http\Requests\LegionRequest;
use App\Models\Legion;
use Illuminate\Http\Request;

class LegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Legion::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('legion-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LegionRequest $request)
    {
        $legion = Legion::create([
            'name' => $request->name,
            'colour' => $request->colour,
        ]);

        return redirect('legion-manager');
    }

    /**
     * Display the specified resource.
     */
    public function show(Legion $legion)
    {
        return $legion;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Legion $legion)
    {
        $legion->delete();

        return redirect('legion-manager');
    }
}
