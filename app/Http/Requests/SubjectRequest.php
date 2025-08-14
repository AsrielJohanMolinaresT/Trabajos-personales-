<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
        return [
            'name' => 'required|string|min:3|max:255',
            'mode' => 'required|string|min:6|max:12',
            'units' => 'required|string|min:4|max:45',
            'shift' =>  'required|string|min:5|max:12',
            'code_subject' => ['required', 'string', 'min:16', 'max:20', Rule::unique('subjects')->ignore($this->subjects)],
            'section_id' => 'required',
            'career_id' => 'required',
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
        
            'units.required' => 'Las unidades son requeridas',
            'units.string' => 'Las unidades solo deben contener caracteres',
            'units.min' => 'Las unidades deben de contener al menos 4 caracteres',
            'units.max' => 'Las unidades no deben de exceder los 45 caracteres ',
        
            'shift.required' => 'El turno es requerido',
            'shift.string' => 'El turno solo debe contener caracteres',
            'shift.min' => 'El turno debe de contener al menos 5 caracteres',
            'shift.max' => 'El turno no debe de exceder los 12 caracteres ',
 
            'code_subject.required' => 'El código de la asinatura es requerido.',
            'code_subject.string' => 'El código de la asinatura solo debe de contener caracteres.',
            'code_subject.min' => 'El código de la asinatura debe contener al menos 16 caracteres.',
            'code_subject.max' => 'El código de la asinatura no debe de pasar de los 20 caracteres.',
            'code_subject.unique' => 'El código de la asinatura es único.',
 
            'section_id.required' => 'El identificador de la sección es necesario',
            'career_id.required' => 'El identificador de la carrera es necesario',
          
        ];
    }
}
