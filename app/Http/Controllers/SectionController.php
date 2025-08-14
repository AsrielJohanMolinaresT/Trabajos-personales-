<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Request\StudentRequest;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $sections = Section::latest()->paginate(10);
         return view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $sections = new Section();
         return view('sections', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectionRequest $request)
    {
        Section::create($request->validated);
        return redirect()->route('sections.index')->whit('success', 'sección creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $sections = Section::find($id);
        return view('sections.show', compact('sections'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $sections = Section::find($id);
        return view('sections.edit', compact('sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectionRequest $request, int $id)
    {
        $sections = Section::find($id);
        $sections->update($request->validated());
        return redirect()->route('sections.index')->whit('update', 'Sección actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $sections = Section::find($id); 
        $sections->delete();
        return redirect()->route('sections.index')->whit('delete', 'Sección eliminada con éxito.');
    }
}
