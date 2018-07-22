
<nav class="navbar navbar-inverse">
  <div class="container">
  <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
  </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            &nbsp;

          </ul>

          <ul class="nav navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/max/public">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/max/public/about">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/max/public/services">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/max/public/posts">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/max/public/posts/create">create post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/max/public/home">dashboard</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a href="http://localhost/max/public/home">dashboard</a></li>
                        
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
              @endguest
          </ul>
      </div>
  </div>
</nav>