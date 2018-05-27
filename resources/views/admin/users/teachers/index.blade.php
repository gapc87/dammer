@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profesores</h1>
        </div>
    </div><!--/.row-->

    @if (session('status'))
        <div class="row">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-12">
            <div class="card card-default">

                <div class="card-body">

                    <div class="table-responsive">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.students.index') }}">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('admin.teachers.index') }}">Profesores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-plus"></i> Nuevo</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.students.create') }}">Alumno</a>
                                    <a class="dropdown-item" href="{{ route('admin.teachers.create') }}">Profesor</a>
                                </div>
                            </li>
                        </ul>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Cursos/s</th>
                                <th scope="col" colspan="2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->user->id }}</td>
                                    <td>{{ $teacher->user->name }}</td>
                                    <td>{{ $teacher->user->surname }}</td>
                                    <td></td>
                                    <td>
                                        @can('$teacher.edit')
                                            <a href="{{ route('admin.teachers.edit', $teacher->user->id) }}" class="btn btn-sm btn-default">Editar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('$teacher.destroy')
                                            {!! Form::open(['route' => ['users.destroy', $teacher->id],
                                            'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right">
                        {{ $teachers->render() }}
                    </div>
                </div>
            </div>

        </div><!--/.col-->

    </div><!--/.row-->

@endsection