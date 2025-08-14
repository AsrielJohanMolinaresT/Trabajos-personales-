@extends('layouts.panel')

@section('title', 'Estudiantes/Crear')

@section('content')
    <div class="col-x1-12 order-x1-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-plus-circle"></i> Registrar Estudiante</h3>
                    </div>
                    <div class="col-4 text-right">

                        <a href="{{ route('students.index') }}" class="btn btn-sm btn-primary">
                        </a>
                    </div>
                </div>
            </div>
            <i class="fa fa-arrow-left"></i> Volver
            <div class="card-body container-fluid">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    @include('students.form')
                </form>
            </div>
        </div>
    </div>
@endsection
