<div class="pl-lg-4">

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre Completo</label>
                <input type="text" id='name' name="name" class="form-control form-control-alternative"
                    placeholder="Ingresar nombre del Estudiante" value="{{ old('name', $student->name) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="code_student">Código de Estudiante</label>
                <input type="text" id='code_student' name="code_student" class="form-control form-control-alternative"
                    placeholder="Ingresar el código de estudiante" value="{{ old('code_student', $student->code_student) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identification_card">Cédula</label>
                <input type="text" id='identification_card' name="identification_card" class="form-control form-control-alternative"
                    placeholder="Ingresar la cédula del estudiante" value="{{ old('identification_card', $student->identification_card) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="age">Edad</label>
                <input type="number" id='age' name="age" class="form-control form-control-alternative"
                    placeholder="Ingresa la edad" value="{{ old('age', $student->age) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_birth">Fecha de Nacimiento</label>
                <input type="date" id='date_birth' name="date_birth" class="form-control form-control-alternative"
                 value="{{ old('date_birth', isset($student->date_birth) ? $student->date_birth->format(Y-m-d) ) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="P_birth">Lugar de Nacimiento</label>
                <input type="text" id='P_birth' name="P_birth" class="form-control form-control-alternative"
                    placeholder="Ingrese su Lugar de Nacimiento" value="{{ old('P_birth', $student->P_birth) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id='address' name="address" class="form-control form-control-alternative"
                    placeholder="Ingrese su Dirección" value="{{ old('address', $student->address) }}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
              <label for="gender">Género</label>
              <select name="gender" id="gender" class="form-control">
                <option value="" disabled>Seleccione el Género</option>
                <option value="Masculino" {{ old('gender', $student->gender ?? '') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ old('gender', $student->gender ?? '') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
              </select>
            </div>
        </div>
     </div>
     
     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="nacionality">Nacionalidad</label>
                <input type="text" id='nacionality' name="nacionality" class="form-control form-control-alternative"
                    placeholder="Ingrese su Nacionalidad" value="{{ old('nacionality', $student->nacionality) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="ethnic">Etnía</label>
                <input type="text" id='ethnic' name="ethnic" class="form-control form-control-alternative"
                    placeholder="Ingrese su Etnía" value="{{ old('ethnic', $student->ethnic) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Teléfono</label>
                <input type="number" id='telephone' name="telephone" class="form-control form-control-alternative"
                    placeholder="Ingrese su Teléfono" value="{{ old('telephone', $student->telephone) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="country">País</label>
                <input type="text" id='country' name="country" class="form-control form-control-alternative"
                    placeholder="Ingrese su País" value="{{ old('country', $student->country) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo Electrónico</label>
                <input type="email" id='email' name="email" class="form-control form-control-alternative"
                    placeholder="Ingrese su Correo" value="{{ old('email', $student->email) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="department">Departamento</label>
                <input type="text" id='department' name="department" class="form-control form-control-alternative"
                    placeholder="Ingrese su Departamento" value="{{ old('department', $student->department) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="municipality">Municipio</label>
                <input type="text" id='municipality' name="municipality" class="form-control form-control-alternative"
                    placeholder="Ingrese su Municipio" value="{{ old('municipality', $student->municipality) }}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
             <label for="degree">Nivel Académico</label>
            <select name="degree" id="degree" class="form-control">
                <option value="" disabled>Seleccione el año académico</option>
                <option value="Primaria" {{ old('degree', $student->degree ?? '') == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                <option value="Secundaria" {{ old('degree', $student->degree ?? '') == 'Secundaria' ? 'selected' : '' }}>Secundaria</option>
                <option value="Universidad" {{ old('degree', $student->degree ?? '') == 'Universidad' ? 'selected' : '' }}>Universidad</option>
            </select>
            </div>
        </div>
     </div>

      <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
              <label for="marital_status">Estado Civil</label>
              <select name="marital_status" id="marital_status" class="form-control">
                <option value="" disabled>Seleccione el Estado Civil</option>
                <option value="Casado/a" {{ old('marital_status', $student->marital_status ?? '') == 'Casado/a' ? 'selected' : '' }}>Casado/a</option>
                <option value="Soltero/a" {{ old('marital_status', $student->marital_status ?? '') == 'Soltero/a' ? 'selected' : '' }}>Soltero/a</option>
              </select>
            </div>
        </div>
     </div>
</div>

<hr class="my-4" />
<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Estudiante
        </button>
    </div>
</div>

