<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">Fina Portal News</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
<<<<<<< HEAD
            <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
            @can('user-display')
                <a class="nav-link" href="{{url('/')}}">Home
                <span class="sr-only">(current)</span>
                </a>
                @endcan
            </li>
            <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                @can('user-display')
                <a class="nav-link" href="{{url('about')}}">About</a>
                @endcan
            </li>
            <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
                @can('manage-articles')
                <a class="nav-link" href="/manage">Kelola</a>
                @endcan
=======
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About</a> 
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/manage">Kelola</a>
>>>>>>> 980579bac7eb96edd8082b6673a9344395b87fb6
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li> -->
        </ul>
    </div>
    </div>
</nav>