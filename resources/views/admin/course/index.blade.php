@extends('layouts.app')

@section('content')
    <div class="row flex-xl-nowrap">
        @include('layouts.sidebar')
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



                </div>
            </div>
        </div>
    </div>
@endsection