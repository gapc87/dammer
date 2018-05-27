
<div id="sidebar-collapse" class="col-12 col-md-3 col-xl-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Username</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>

        <div class="clear"></div>

    </div>

    <div class="divider"></div>

    <ul class="nav menu">

    @role('admin')

        <li class="active">
            <a href="{{ route('dashboard') }}">
                <em class="fa fa-dashboard">&nbsp;</em> Dashboard
            </a>
        </li>
        <li>

        <li class="parent ">
            <a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Administración <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li>
                    <a class="" href="{{ route('admin.students.index') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Usuarios
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Cursos
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Roles
                    </a>
                </li>
            </ul>
        </li>

    @else

    @endrole

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <em class="fa fa-power-off">&nbsp;</em> {{ __('Logout') }}
            </a>
        </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
