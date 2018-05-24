@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('admin.layouts.sidebar')
        <div class="col-md-10 py-4">
            <div class="card">
                <div class="card-header">
                    Cursos
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
                    <div class="accordion" id="accordionExample">
                        @foreach($courses as $course)
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $course->id }}" aria-expanded="false" aria-controls="collapseOne">
                                        {{ $course->course_name }}
                                    </button>
                                </h5>
                            </div>

                            <div id="{{ $course->id }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    @foreach($course->levels as $level)

                                            @foreach($level->groups as $group)
                                            <div class="d-flex mb-2 bb">
                                                <div class="align-self-center align-items-center">
                                                    <b>Curso: </b>{{ $level->level }} <b>Grupo: </b>{{ $group->letter_group }}
                                                </div>
                                                <div class="ml-auto p-2">
                                                    <a class="btn btn-sm btn-secondary mr-1" href="{{ route('admin.modules', $level->id) }}" role="button">Módulos</a>
                                                    <a class="btn btn-sm btn-secondary mr-1" href="#" role="button">Alumnos</a>
                                                    <a class="btn btn-sm btn-secondary" href="#" role="button">Profesores</a>
                                                </div>
                                            </div>
                                            @endforeach

                                    @endforeach


                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection