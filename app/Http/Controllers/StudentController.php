<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Request\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = new Student(); 
        return view('students.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validade());
        return redirect()->route('students.index')->with('success', 'Estudiante creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $students = Student::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $students = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, int $id)
    {
        $students = Student::find($id);
        $students->update($request->validatec());

        return redirect()->route('students.index')->with('update', 'Estudiante actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $students = Student::find($id);
        $student->delete();

        return redirect()->route('students.index')->with('deleted', 'Estudiante eliminado con exito');
    }
}
