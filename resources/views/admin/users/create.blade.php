@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Ver Alumno</h1>
        </div>
    </div><!--/.row-->

    <div class="row mb-5">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-body">
                        {!! Form::open(['route' =>['admin.students.store']]) !!}

                        @include('admin.users.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection