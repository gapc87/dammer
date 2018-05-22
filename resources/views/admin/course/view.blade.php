@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('admin.layouts.sidebar')
        <div class="col-md-10 py-4">
            <div class="card">
                <div class="card-header">
                    {{ $course->course_name }}
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
                    <div class="row">
                    @foreach($course->levels as $level)

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">

                                <b>
                                    Curso:
                                </b>
                                {{ $level->level }}
                                <b>
                                    Grupo:
                                </b>
                                {{ $level->groups[0]->letter_group }}

                            </div>
                            <div class="card-body">


                                <b>Profesorado:</b><br />
                                <ul>
                                @foreach($level->groups as $group)
                                    @foreach($group->teachers as $teacher)
                                        <li>{{ $teacher->name }} {{ ($group->tutor[0]->id != $teacher->id) ?null:"(tutor)" }}</li>
                                    @endforeach
                                @endforeach
                                </ul>

                                <b>Alumnado:</b><br />
                                <ul>
                                @foreach($level->groups as $group)
                                    @foreach($group->students as $student)
                                        <li>{{ $student->name }}</li>
                                    @endforeach
                                @endforeach
                                </ul>
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