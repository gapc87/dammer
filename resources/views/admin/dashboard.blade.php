@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard admin</h1>
        </div>
    </div><!--/.row-->

    @if (session('status'))
        <div class="row">
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="d-inline-block mb-0">Resumen</h3>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span class="d-inline-flex mt-1">Cursos: {{ $courses }}</span>
                        <a href="#">
                            <span class="btn btn-secondary btn-sm float-right">Administrar</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <span class="d-inline-flex mt-1">Grupos: {{ $groups }}</span>
                        <a href="#">
                            <span class="btn btn-secondary btn-sm float-right">Administrar</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <span class="d-inline-flex mt-1">Profesores: {{ $teachers }}</span>
                        <a href="#">
                            <span class="btn btn-secondary btn-sm float-right">Administrar</span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <span class="d-inline-flex mt-1">Estudiantes: {{ $students }}</span>
                        <a href="#">
                            <span class="btn btn-secondary btn-sm float-right">Administrar</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div><!--/.col-->


        <div class="col-md-6">
            <div class="card card-default chat">
                <div class="card-header">
                    <h3 class="d-inline-block mb-0">Chat</h3>
                </div>

                <div class="card-body">
                    <ul>
                        <li class="left clearfix">
                            <span class="chat-img float-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle">
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                            </div>
                        </li>
                        <li class="right clearfix">
                            <span class="chat-img float-right">
								<img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle">
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="pull-left primary-font">Jane Doe</strong>
                                    <small class="text-muted">6 mins ago</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                            </div>
                        </li>
                        <li class="left clearfix">
                            <span class="chat-img float-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle">
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">John Doe</strong>
                                    <small class="text-muted">32 mins ago</small>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here...">
                        <span class="input-group-btn">
							<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span>
                    </div>
                </div>
            </div>

        </div><!--/.col-->

    </div><!--/.row-->

@endsection