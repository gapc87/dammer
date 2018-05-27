@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('layouts.sidebar')
        <div class="col-md-10 py-4">
            <div class="card">
                <div class="card-header">
                    {{-- Grupo {{ $group->level->level }}{{ $group->letter_group }} {{ $course->course_name }} --}}
                    <span class="float-right">
                        <a href="#"><i class="fas fa-plus-circle"></i></a>
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
                    @foreach($group->students as $student)
                        <li>{{ $student->user->name }}</li>
                    @endforeach
                    </ul>
                    --}}

                        <table class="table table-striped table-hover">
                            <thread>
                                <tr>
                                    <th width="10ox">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thread>
                            <tbody>
                            @foreach($groups as $group)
                                <tr>
                                    <td>{{ $group->id }}</td>
                                    <td>{{ $group->level->level }}{{ $group->letter_group }} {{ $courses[$loop->index]->course_name }}</td>
                                    <td width="10px">
                                            <a href="{{ route('groups.show', $group->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                    </td>
                                    <td width="10px">
                                            <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['groups.destroy', $group->id],
                                        'method' => 'DELETE']); !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $groups->render() }}

                </div>
            </div>
        </div>
    </div>
@endsection