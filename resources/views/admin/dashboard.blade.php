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
                    <ul>
                        @foreach($courses as $course)
                            @foreach($course->levels as $level)
                                @foreach($level->groups as $group)
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

                </div>
            </div>
        </div>
    </div>
@endsection