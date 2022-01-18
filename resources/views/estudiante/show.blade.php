@extends('layouts.app')

@section('template_title')
    {{ $estudiante->name ?? 'Show Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $estudiante->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $estudiante->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $estudiante->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $estudiante->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Promedio:</strong>
                            {{ $estudiante->promedio }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $estudiante->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Seccion:</strong>
                            {{ $estudiante->seccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
