<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Request\TeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::latest()->paginate(10);
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = new Teacher();
        return view('teachers.create', compact('teachers'));
         
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        Teacher::create($request->validated());
        return redirect()->route('teachers.index')->whit('success', 'Profesor creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.show', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $teachers = Teacher::find($id);
        return view('teachers.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, int $id)
    {
         $teachers = Teacher::find($id);
         $teachers->update($request->validatec());
         return redirect()->route('teachers.index')->with('update', 'Profesor actualizado con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $teachers = Teacher::find($id); 
        $teachers->delete(); 
        return redirect()->route('teachers.index')->whit('delete', 'Profesor eliminado con éxito.');
    }
}
