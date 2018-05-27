@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('layouts.sidebar')
        <div class="col-md-10 py-4">
            <div class="card">
                <div class="card-header">
                    Cursos
                    <span class="float-right">
                        <a href="{{ route('courses.create') }}"><i class="fas fa-plus-circle"></i></a>
                    </span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--
                    <ul>
                    @foreach($course->students as $student)
                        <li>{{ $student->user->name }}</li>
                    @endforeach
                    </ul>
                    --}}

                        <table class="table table-striped table-hover">
                            <thread>
                                <tr>
                                    <th width="10ox">ID</th>
                                    <th>Curso</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thread>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>
                                        <a href="{{ route('courses.show', $course->id) }}">
                                        {{ $course->course_name }} <i class="fas fa-angle-right"></i>
                                        </a>
                                    </td>
                                    <td width="10px">
                                            <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                    </td>
                                    <td width="10px">
                                            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['courses.destroy', $course->id],
                                        'method' => 'DELETE']); !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $courses->render() }}

                </div>
            </div>
        </div>
    </div>
@endsection