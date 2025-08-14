<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Http\Request\CareerRequest;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::latest()->paginate(10);
        return view('careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = new Career();
        return view('careers', compact('careers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareerRequest $request)
    {
        Career::create($request->validated);
        return redirect()->route('carees.index')->whit('success', 'Carrera creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $careers = Career::find($id);
        return view('careers.show', compact('careers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $careers = Career::find($id);
        return view('careers.edit', compact('careers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareerRequest $request, int $id)
    {
        $careers = Career::find($id);
        $careers->update($request->validated());
        return redirect()->route('careers.index')->whit('update', 'Carrera actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $careers = Career::find($id); 
        $careers->delete();
        return redirect()->route('careers.index')->whit('delete', 'Carrera eliminada con éxito.');
    }
}
