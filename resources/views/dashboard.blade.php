@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
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


        <div class="col-md-6">
            <div class="card card-default ">
                <div class="card-heading">
                    Timeline
                    <ul class="pull-right card-settings card-button-tab-right">
                        <li class="dropdown">
                            <a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                <em class="fa fa-cogs"></em>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <ul class="dropdown-settings">
                                        <li>
                                            <a href="#">
                                                <em class="fa fa-cog"></em> Settings 1
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                <em class="fa fa-cog"></em> Settings 2
                                            </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="#">
                                                <em class="fa fa-cog"></em> Settings 3
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <span class="pull-right clickable card-toggle card-button-tab-left"><em class="fa fa-toggle-up"></em></span>
                </div>

                <div class="card-body timeline-container">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-badge">
                                <em class="glyphicon glyphicon-pushpin"></em>
                            </div>
                            <div class="timeline-card">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge primary">
                                <em class="glyphicon glyphicon-link"></em>
                            </div>
                            <div class="timeline-card">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <em class="glyphicon glyphicon-camera"></em>
                            </div>
                            <div class="timeline-card">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <em class="glyphicon glyphicon-paperclip"></em>
                            </div>
                            <div class="timeline-card">
                                <div class="timeline-heading">
                                    <h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--/.col-->

    </div><!--/.row-->

@endsection