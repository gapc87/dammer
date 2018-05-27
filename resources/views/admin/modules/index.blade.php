@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('layouts.sidebar')
        <div class="col-md-10 py-4">
            <div class="card">
                <div class="card-header">
                    Módulos de: <b>{{ $level->course->course_name }} (Año {{ $level->level }})</b>
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
                        @foreach($modules as $module)
                            <li>{{ $module->name }} </li>

                            @foreach($level->groups as $group)

                                {{ $group->teachers }}

                            @endforeach

                        @endforeach

                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection