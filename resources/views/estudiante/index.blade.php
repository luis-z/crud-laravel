@extends('layouts.app')

@section('template_title')
    Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Estudiantes') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Agregar un nuevo estudiante') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Edad</th>
										<th>Dni</th>
										<th>Promedio</th>
										<th>Grado</th>
										<th>Sección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudiantes as $estudiante)
                                        <tr>
                                            <td>{{ $estudiante->id }}</td>
											<td>{{ $estudiante->nombre }}</td>
											<td>{{ $estudiante->apellido }}</td>
											<td>{{ $estudiante->edad }}</td>
											<td>{{ $estudiante->dni }}</td>
											<td>{{ $estudiante->promedio }}</td>
											<td>{{ $estudiante->grado }}</td>
											<td>{{ $estudiante->seccion }}</td>

                                            <td>
                                                <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudiantes.show',$estudiante->id) }}"><i class="fa fa-fw fa-eye"></i> Detalle</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudiantes.edit',$estudiante->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $estudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
