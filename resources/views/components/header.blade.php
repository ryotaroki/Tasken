@section('header')
    <div style="text-align: center">
        <h3 class="title"><a href="/top">TaSuKen</a></h3>
    </div>
    <nav class="">
        <ul class="nav navber-nav d-flex flex-row jutify-content-center" style="justify-content: space-around;">
            <li class="nav-list" style="font-weight:bold;">TOP</li>
            <li class="nav-list" style="font-weight:bold;">ABOUT</li>
            <li class="nav-list" style="font-weight:bold;"><a href="{{ route('tasks.create')}}">New Task</a></li>
            <li class="nav-list" style="font-weight:bold;"><a href="{{ route('tasks.index')}}">Confirm TASKS</a></li>
        </ul>
    </nav>
@endsection
