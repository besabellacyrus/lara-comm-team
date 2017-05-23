<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 side-bar-panel">
            <ul>
                <li>
                    <i class="fa fa-group"></i> 
                    <label for="">Teams</label>
                    <a href="{{ url('/team/create') }}"><i class="fa fa-plus-circle pull-right"></i></a>
                    @foreach ( Auth::user()->teams as $team )
                        <li><a href="{{ url('/team/'. $team->id ) }}">{{ $team->title }}</a></li>
                    @endforeach
                </li>
                <li>
                    <i class="fa fa-users"></i> <label for="">Users</label>
                    @foreach ( $users as $user )
                        <li><a href="">{{ $user->name }}</a></li>
                    @endforeach
                </li>
            </ul>
        </div>
        <div class="col-md-9 chat-panel">
            @yield('content')
        </div>
    </div>
</div>