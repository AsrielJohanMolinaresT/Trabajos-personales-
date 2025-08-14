<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TuitionRequest extends FormRequest
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
            'e_center' => 'required|string|min:3|max:255',
            'type' => 'required|string|min:5|max:45', 
            'semeste' => 'required|string|min:4|max:255', 
            'year' => 'required',
            'student_id' => 'required', 
            'career_id' => 'required',
        ];
    }
    public function messages ()
    { 
        return 
        [
            'e_center.required' => 'EL nombre del Centro es requerido.',
            'e_center.string' => 'EL nombre del Centro solo debe contener caracteres.',
            'e_center.min' => 'EL nombre del Centro debe de contener al menos 3 caracteres.',
            'e_center.max' => 'EL nombre del Centro no debe de exceder los 255 caracteres.',
        
            'type.required' => 'El tipo de matrícula es requerido',
            'type.string' => 'El tipo de matrícula solo debe contener caracteres',
            'type.min' => 'El tipo de matrícula debe de contener al menos 5 caracteres',
            'type.max' => 'El tipo de matrícula no debe de exceder los 45 caracteres ',

            'semester.required' => 'El semestre es requerido',
            'semester.string' => 'El semestre solo debe contener caracteres',
            'semester.min' => 'El semestre debe de contener al menos 4 caracteres',
            'semester.max' => 'El semestre no debe de exceder los 45 caracteres ',

            'year.required' => 'El año es requerido.', 

            'student_id' => 'La identificación de estudiante es requerida', 
            'career_id' => 'La identificación de la carrera es requerida',
        ];
    }
}
