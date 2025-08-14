<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Request\NoteRequest;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject; 

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $notes = Note::with('students', 'teachers', 'subjects')->paginate(10);
       return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $notes = new Note();
       $students = Student::all();
       $teachers = Teacher::all();
       $subjects = Subject::all();
       return view('notes.create', compact('notes','student', 'teachers', 'subjects' ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteRequest $request)
    {
       Note::create($request->validated());
       return redirect()->route('notes.index')->with('success', 'Calificaciones creada com éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $notes = Note::find($id);
        $students = Student::all(); 
        $teachers = Teacher::all(); 
        $subjects = Subject::all();
        return view('notes.show', compact('notes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $notes = Note::find($id); 
        $students = Student::all(); 
        $teachers = Teacher::all(); 
        $subjects = Subject::all();
        return view('notes.edit', compact('notes', 'students', 'teachers', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, string $id)
    {
        $notes = Note::find();
        $notes->update($request->validated());
        return redirect()->route('notes.index')->whit('update', 'Calaficaciones actualizadas con exito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notes = Note::find($id); 
        $notes->delete();
        return redirect()->route('notes.index')->with('delete', 'Calificaciones eliminadas con exito');
    }
}
