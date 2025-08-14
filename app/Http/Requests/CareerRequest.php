<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
        'name' => 'required|string|min:3|max:255',
        'mode' => 'required|string|min:6|max:12',
        'shift' => 'required|string|min:5|max:12',
        'code_career' => ['required', 'string', 'min:6', 'max:16', Rule::unique('careers')->ignore($this->careers)],
        'duration' => 'required|string|min:3|max:45',
        'specialty' => 'required|string|min:3|max:255',       
        ];
    }
    public function messages ()
    {
        return
        [
        'name.required' => 'Su nombre es requerido',
        'name.string' => 'El nombre solo debe contener caracteres',
        'name.min' => 'El nombre debe de contener al menos 3 caracteres',
        'name.max' => 'El nombre no debe de exceder los 255 caracteres ',
        
        'mode.required' => 'El modo es requerido',
        'mode.string' => 'El modo solo debe contener caracteres',
        'mode.min' => 'El modo debe de contener al menos 6 caracteres',
        'mode.max' => 'El modo no debe de exceder los 12 caracteres ',
        
        'shift.required' => 'El turno es requerido',
        'shift.string' => 'El turno solo debe contener caracteres',
        'shift.min' => 'El turno debe de contener al menos 5 caracteres',
        'shift.max' => 'El turno no debe de exceder los 12 caracteres ',
 
        'code_career.required' => 'El código de la carrera es requerido.',
        'code_career.string' => 'El código de la carrera solo debe de contener caracteres.',
        'code_career.min' => 'El código de la carrera debe contener al menos 16 caracteres.',
        'code_career.max' => 'El código de la carrera no debe de pasar de los 20 caracteres.',
        'code_career.unique' => 'El código de la carrera es único.',
 
        'duration.required' => 'La duración es requerido',
        'duration.string' => 'La duración solo debe contener caracteres',
        'duration.min' => 'La duración debe de contener al menos 3 caracteres',
        'duration.max' => 'La duración no debe de exceder los 45 caracteres ',

        'specialty.required' => 'Su nombre es requerido',
        'specialty.string' => 'El nombre solo debe contener caracteres',
        'specialty.min' => 'El nombre debe de contener al menos 3 caracteres',
        'specialty.max' => 'El nombre no debe de exceder los 255 caracteres ',
        ];
    }
}

        