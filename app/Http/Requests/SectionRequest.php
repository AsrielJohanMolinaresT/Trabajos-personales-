<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
        'state' => 'required|string|min:3|max:45',
        'area' => 'required|string|min:6|max:255',
        'responsible' => 'required|string|min:3|max:255',
        'pavillion' => 'required|string|min:6|max:255',
        'type' => 'required|string|min:5|max:255',
        'capacity' => 'required|string|min:8|max:255',

              ];
    }
    public function messages ()
    {     
        return 
        [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre solo debe contener caracteres',
            'name.min' => 'El nombre debe de contener al menos 3 caracteres',
            'name.max' => 'El nombre no debe de exceder los 255 caracteres ',
            
            'state.required' => 'El estado es requerido',
            'state.string' => 'El estado solo debe contener caracteres',
            'state.min' => 'El estado debe de contener al menos 3 caracteres',
            'state.max' => 'El estado no debe de exceder los 45 caracteres ',
            
            'area.required' => 'El area es requeridad.',
            'area.string' => 'El area solo debe de tener caracteres.',
            'area.min' => 'El area debe de tener al menos 6 caracteres.',
            'area.max' => 'El area no debe de pasar los 255 caracteres.',

            'responsible.required' => 'El responsable es requerido',
            'responsible.string' => 'El responsable solo debe contener caracteres',
            'responsible.min' => 'El responsable debe de contener al menos 3 caracteres',
            'responsible.max' => 'El responsable no debe de exceder los 255 caracteres ',

            'pavillion.required' => 'El pabellón es requerido',
            'pavillion.string' => 'El pabellón solo debe contener caracteres',
            'pavillion.min' => 'El pabellón debe de contener al menos 6 caracteres',
            'pavillion.max' => 'El pabellón no debe de exceder los 255 caracteres ',
            
            'type.required' => 'El tipo de notas es requerido',
            'type.string' => 'El tipo de notas solo debe contener caracteres',
            'type.min' => 'El tipo de notas debe de contener al menos 5 caracteres',
            'type.max' => 'El tipo de notas no debe de exceder los 255 caracteres ',
            
            'capacity.required' => 'La capacidad es requerido',
            'capacity.string' => 'La capacidad solo debe contener caracteres',
            'capacity.min' => 'La capacidad debe de contener al menos 8 caracteres',
            'capacity.max' => 'La capacidad no debe de exceder los 255 caracteres ',
        ];
    }
}
