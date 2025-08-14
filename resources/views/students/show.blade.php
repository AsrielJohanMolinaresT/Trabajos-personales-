@extends('layouts.panel')
@section('title', 'student/show')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card-header bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-newspaper"></i> Ver estudiante</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('students.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-list"></i> Volver
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h6 class="heading-small text-muted mb-4">Información del Estudiante</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="name">
                                    <i class="fas fa-user"></i> Nombre Completo
                                </label>
                                <p>{{ $student->name }}</p>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="code_student">
                                    <i class="fas fa-user"></i> Código de Estudiante
                                </label>
                                <p>{{ $student->code_student }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="identification_card">
                                    <i class="fas fa-user"></i> Cédula
                                </label>
                                <p>{{ $student->identification_card }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="age">
                                    <i class="fas fa-user"></i> Edad
                                </label>
                                <p>{{ $student->age }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="date_birth">
                                    <i class="fas fa-user"></i> Fecha de Nacimiento
                                </label>
                                <p>{{ $student->date_birth }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="address">
                                    <i class="fas fa-user"></i> Dirección
                                </label>
                                <p>{{ $student->address }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="gender">
                                    <i class="fas fa-user"></i> Género 
                                </label>
                                <p>{{ $student->gender }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="nacionality">
                                    <i class="fas fa-user"></i> Nacionalidad
                                </label>
                                <p>{{ $student->nacionality }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="ethnic">
                                    <i class="fas fa-user"></i> Etnía
                                </label>
                                <p>{{ $student->ethnic }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="telephone">
                                    <i class="fas fa-user"></i> Teléfono
                                </label>
                                <p>{{ $student->telephone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="country">
                                    <i class="fas fa-user"></i> País
                                </label>
                                <p>{{ $student->country }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="email">
                                    <i class="fas fa-envelope"></i> Correo
                                </label>
                                <p>{{ $student->email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="department">
                                    <i class="fas fa-user"></i> Departamento
                                </label>
                                <p>{{ $student->department }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="municipality">
                                    <i class="fas fa-user"></i> Municipio
                                </label>
                                <p>{{ $student->municipality }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="degree">
                                    <i class="fas fa-user"></i> Grado
                                </label>
                                <p>{{ $student->degree }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="marital_status">
                                    <i class="fas fa-user"></i> Estado Civil
                                </label>
                                <p>{{ $student->marital_status }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="register_date">
                                    <i class="fas fa-calender-check"></i> Fecha de Registro
                                </label>
                                <p>{{ $student->register_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
