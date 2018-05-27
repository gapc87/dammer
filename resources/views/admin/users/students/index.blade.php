@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Alumnos</h1>
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
                                <a class="nav-link active" href="{{ route('admin.students.index') }}">Alumnos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.teachers.index') }}">Profesores</a>
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
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->user->id }}</td>
                                    <td>{{ $student->user->name }}</td>
                                    <td>{{ $student->user->surname }}</td>
                                    <td>
                                        {{ $student->group->level->level }}{{ $student->group->letter_group }}
                                        - {{ $student->group->level->course->course_name }}
                                    </td>
                                    <td>
                                        @can('$student.edit')
                                            <a href="{{ route('admin.students.edit', $student->user->id) }}" class="btn btn-sm btn-default">Editar</a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('$student.destroy')
                                            {!! Form::open(['route' => ['users.destroy', $student->id],
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
                        {{ $students->render() }}
                    </div>
                </div>
            </div>

        </div><!--/.col-->

    </div><!--/.row-->

@endsection