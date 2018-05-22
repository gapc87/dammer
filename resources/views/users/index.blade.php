@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Usuarios
                    </div>


                    <div class="card-body">

                        <table class="table table-striped table-hover">
                            <thread>
                                <tr>
                                    <th width="10ox">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thread>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                    @can('$user.show')
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">Ver</a>
                                    @endcan
                                    </td>
                                    <td>
                                    @can('$user.edit')
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-default">Editar</a>
                                    @endcan
                                    </td>
                                    <td>
                                    @can('$user.destroy')
                                        {!! Form::open(['route' => ['users.destroy', $user->id],
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger"></button>
                                        {!! Form::close() !!}
                                    @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $users->render() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
