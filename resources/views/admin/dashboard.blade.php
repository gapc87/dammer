@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('admin.layouts.sidebar')
        <div class="col-md-5 py-4">
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
                                            <div class="col-12">
                                                <b>Curso: </b>{{ $level->level }} <b>Grupo: </b>{{ $level->groups[0]->letter_group }}
                                                <a class="float-right" href="#">Módulos</a>
                                                <a class="float-right" href="#">Alumnos</a>
                                                <a class="float-right" href="#">Profesores</a>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>




                    {{--
                    <ul>

                        @foreach($courses as $course)
                            @foreach($course->levels as $level)
                                @foreach($level->groups as $group)

                                    <div class="btn-group">
                                        <button class="btn btn-secondary btn-sm" type="button">
                                            {{ $course->course_name }}
                                        </button>
                                        <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            ...
                                        </div>


                                <li>
                                    Curso:
                                    <a href="{{ route('courses.index') }}">
                                        {{ $level->level }}º {{ $group->letter_group }} - {{ $course->course_name }}
                                    </a>
                                </li>
                                @endforeach
                            @endforeach
                        @endforeach
                    </ul>
                    --}}

                </div>
            </div>
        </div>
    </div>
@endsection