<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return 
        [
            'note' => 'required|int',
            'type' => 'required|string|min:5|max:45',
            'semester' => 'required|string|min:4|max:255',
            'code_note' =>  ['required', 'string', 'min:16', 'max:20', Rule::unique('notes')->ignore($this->notes)],
            'student_id' => 'required',
            'teacher_id' => 'required',
            'subject_id' => 'required',
        ];
    }
    public function messages ()
    { 
        return 
        [
            'note.required' => 'La nota es requeridad.',
            'note.int' => 'La nota solo debe de contener numeros.',
            
            'type.required' => 'El tipo de nota es requerido',
            'type.string' => 'El tipo de nota solo debe contener caracteres',
            'type.min' => 'El tipo de nota debe de contener al menos 5 caracteres',
            'type.max' => 'El tipo de nota no debe de exceder los 45 caracteres ',

            'semester.required' => 'El semestre es requerido',
            'semester.string' => 'El semestre solo debe contener caracteres',
            'semester.min' => 'El semestre debe de contener al menos 4 caracteres',
            'semester.max' => 'El semestre no debe de exceder los 45 caracteres ',

            'code_note.required' => 'El código de notas es requerido.',
            'code_note.string' => 'El código de notas solo debe de contener caracteres.',
            'code_note.min' => 'El código de notas debe contener al menos 16 caracteres.',
            'code_note.max' => 'El código de notas no debe de pasar de los 20 caracteres.',
            'code_note.unique' => 'El código de notas es único.',

            'student_id.required' => 'El identificador de estudiante es necesario',
            'teacher_id.required' => 'El identificador de maestro es necesario',
            'subject_id.required' => 'El identificador de asignatura es necesario',
        ];
    }
}
