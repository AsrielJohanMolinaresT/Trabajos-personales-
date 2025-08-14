<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
        'code_teacher' => ['required', 'string', 'min:8', 'max:20', Rule::unique('teachers')->ignore($this->teachers)],
        'identification_card' => ['required', 'string', 'min:8', 'max:20', Rule::unique('teachers')->ignore($this->teachers)],
        'age' => 'requirede|int',
        'birthdate' => 'required',
        'P_birth' => 'required|string|min:3|max:255',
        'address' => 'required|string|min:8|max:255',
        'gender' => 'required|string|min:5|max:10',
        'nationality' => 'required|string|min:4|max:255',
        'ethnic' => 'required|string|min:8|max:255',
        'telephone' => ['required', 'string', 'min:8', 'max:12', Rule::unique('teachers')->ignore($this->teachers)],
        'country' => 'required|string|min:4|max:255',
        'email' => ['required', 'string', 'min:6', 'max:255', Rule::unique('teachers')->ignore($this->teachers)],
        'department' => 'required|string|min:6|max:255',
        'degree' => 'required|string|min:12|max:255',
        'marital_status' => 'required|string|min:8|max:12',
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

        'code_teacher.required' => 'El código de maestro es requerido.',
        'code_teacher.string' => 'El código de maestro solo debe de contener caracteres.',
        'code_teacher.min' => 'El código de maestro debe contener al menos 8 caracteres.',
        'code_teacher.max' => 'El código de maestro no debe de pasar de los 20 caracteres.',
        'code_teacher.unique' => 'El código de maestro es único.',
        
        'identification_card.required' => 'La identificación es requerido.',
        'identification_card.string' => 'La identificación solo debe de contener caracteres.',
        'identification_card.min' => 'La identificación debe contener al menos 8 caracteres.',
        'identification_card.max' => 'La identificación no debe de pasar de los 20 caracteres.',
        'identification_card.unique' => 'La identificación es única.',
        
        'age.required' => 'La edad es requeridad.',
        'age.int' => 'La edad solo debe de contener numeros.',

        'birthdate.required' => 'La fecha de nacimiento es requerida.',

        'P_birth.required' => 'El lugar de nacimiento es requerido',
        'P_birth.string' => 'El lugar de nacimiento solo debe de tener caracteres',
        'P_birth.min' => 'El lugar de nacimiento debe de tener al menos 3 caracteres',
        'P_birth.max' => 'El lugar de nacimiento no debe de pasar los 255 caracteres',

        'address.required' => 'La dirección es requeridad.',
        'address.string' => 'La dirección solo debe de tener caracteres.',
        'address.min' => 'La dirección debe de tener al menos 8 caracteres.',
        'address.max' => 'La dirección no debe de pasar los 255 caracteres.',
        
        'gender.required' => 'El género es requerido.',
        'gender.string' => 'El género solo debe de tener caracteres.',
        'gender.min' => 'El género debe de tener al menos 5 caracteres.',
        'gender.max' => 'El género no debe de pasar los 10 caracteres.',

        'nacionality.required' => 'La nacionalidad es requerida.',
        'nacionality.string' => 'La nacionalidad solo debe de tener caracteres.',
        'nacionality.min' => 'La nacionalidad debe tener al menos 4 caracteres.',
        'nacionality.max' => 'La nacionalidad no debe de pasar los 255 caracteres.',
        
        'ethnic.required' => 'La etnía es requerida.',
        'ethnic.string' => 'La etnía solo debe de contener caracteres.',
        'ethnic.min' => 'La etnía debe de tener al menos 8 caracteres. ',
        'ethnic.max' => 'La etnía no debe de pasar los 255 caracteres.',

        'telephone.required' => 'El número de telefono es requerido.',
        'telephone.string' => 'El número de telefono solo debe de contener caracteres.',
        'telephone.min' => 'El número de telefono debe contener al menos 8 caracteres.',
        'telephone.max' => 'El número de telefono no debe de pasar de los 12 caracteres.',
        'telephone.unique' => 'El número de telefono es único.',
        
        'country.required' => 'El país es requerido.',
        'country.string' => 'El país solo debe de tener caracteres.',
        'country.min' => 'El país debe de tener al menos 4 caracteres.',
        'country.max' => 'El país no debe de pasar los 255 caracteres.',
        
        'email.required' => 'El correo es requerido.',
        'email.string' => 'El correo solo debe de tener caracteres.',
        'email.min' => 'El correo debe de tener al menos 6 caracteres',
        'email.max' => 'El correo no debe de pasar los 255 caracteres.',
        'email.unique' => 'El correo es único.',
        
        'department.required' => 'El Departamento es requerido',
        'department.string' => 'El Departamento solo debe de tener caracteres.',
        'department.min' => 'El Departamento debe de tener al menos 6 caracteres.',
        'department.max' => 'El Departamanto no debe de pasar los 255 caracteres.',

        'degree.required' => 'El grado es requerido.',
        'degree.string' => 'El grado debe de tener solo caracteres.',
        'degree.min' => 'El grado debe de tener al menos 12 caracteres.',
        'degree.max' => 'El grado no debe de pasar los 255 caracteres',

        'marital_status.required' => 'El estado civil es requerido.',
        'marital_status.string' => 'El estado civil solo debe de tener caracteres.',
        'marital_status.min' => 'El estado civil debe de tener al menos 8 caracteres.',
        'marital_status.max' => 'El estado civil no debe de pasar los 12 caracteres.',
        ];
    }
}
