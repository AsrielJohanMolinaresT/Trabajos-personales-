<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuitio;
use App\Http\Request\TuitionRequest;
use App\Models\Student;
use App\Models\Career;

class TuitiontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tuitions = Tuition::with('students', 'careers')->paginate(10);
        return view('tuitions.index', compact('tuitions'));
    }
 // php artisan make:View tution/create 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tuitions = new Tuition();
        $students = Student::all();
        $careers = Career::all();
        return view('tuitions.create', compact('tuition','student', 'careers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TuitionRequest $request)
    {
        Tuition::create($request->validated());
        return redirect()->route('tuitions.index')->with('success', 'Matrícula creada com éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $tuitions = Tuition::find($id);
        return view('tuitions.show', compact('tuitions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $tuitions = Tuition::find($id);
        $students = Student::all(); 
        $careers = Career::all();
        return view('tutions.edit', compact('tuitions', 'students', 'careers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TuitionRequest $request, int $id)
    {
        $tuitions = Tuition::find();
        $tuitions->update($tuitions->validated());
        return redirect()->route('tuitions.index')->whit('update', 'Matrícula actualizada con exito.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $tuitions = Tuition::find($id); 
        $tuitions->delete();
        return redirect()->route('tuitions.index')->with('delete', 'Matricula eliminada con exito');
    }
}
