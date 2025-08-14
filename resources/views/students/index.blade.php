@extends('layouts.panel')
@section('title', 'estudiantes')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-conten-between align-items-center">
                        <h3 class="mb-0">estudiantes</h3>
                        <a href="{{ route('student.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo estudiante
                        </a>

                    </div>

                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Código de estudiante</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Fecha de Nacimiento</th>
                                <th scope="col">Lugar de Nacimiento</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Género</th>
                                <th scope="col">Nacionalidad</th>
                                <th scope="col">Etnía</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">País</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Municipio</th>
                                <th scope="col">Grado</th>
                                <th scope="col">Estado Civil</th>
                                <th scope="col">Fecha de Registro</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $student->id }} </span>
                                    </td>
                                    <td>{{ $students->name }}</td>
                                    <td>{{ $students->code_student }}</td>
                                    <td>{{ $students->identification_card }}</td>
                                    <td>{{ $students->age }}</td>
                                    <td>{{ $students->date_birth }}</td>
                                    <td>{{ $students->P_birth }}</td>
                                    <td>{{ $students->address }}</td>
                                    <td>{{ $students->gender }}</td>
                                    <td>{{ $students->nacionality }}</td>
                                    <td>{{ $students->ethnic }}</td>
                                    <td>{{ $students->telephone }}</td>
                                    <td>{{ $students->country }}</td>
                                    <td>{{ $students->email }}</td>
                                    <td>{{ $students->department }}</td>
                                    <td>{{ $students->municipality }}</td>
                                    <td>{{ $students->degree }}</td>
                                    <td>{{ $students->marital_status }}</td>
                                    <td>{{ $students->created_at }}</td>

                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('student.show', $student) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('student.edit', $student) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;"
                                            onsubmit="return confirm('¿Estas seguro que desea eliminar este estudiante? Esta acción no se puede deshacer.');">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $students->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
