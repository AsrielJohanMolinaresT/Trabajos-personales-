<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request\SubjectRequest;
use App\Models\Career;
use App\Models\Section;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $subjects = subject::with('careers', 'sections')->paginate(10);
       return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $subjects = new Subject();
       $careers  =  Career::all();
       $careers = Section::all();
       return view('subjects.create', compact('subjects','careers', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        Subject::create($request->validated());
        return redirect()->route('subjects.index')->with('success', 'Materia creada com éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $subjects = Subject::find($id);
        return view('subjects.show', compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $subjects = Subject::find($id); 
        $careers = Career::all(); 
        $sections = Section::all(); 
        return view('subjects.edit', compact('subjects', 'careers', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectRequest $request, int $id)
    {
        $subjects = Subject::find();
        $subjects->update($subjects->validated());
        return redirect()->route('subjects.index')->whit('update', 'Materia actualizada con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $subjects = Subject::find($id); 
        $subjects->delete();
        return redirect()->route('subjects.index')->with('delete', 'Materia eliminadas con exito');
    }
}
