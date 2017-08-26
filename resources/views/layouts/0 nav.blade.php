        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('about') }}">About Me</a></li>
                        <li><a href="{{ route('apps') }}">My Apps</a></li>
                        <li><a href="{{ route('getContact') }}">Contact Me</a></li>
                        <li class="dropdown">
                          <a href="{{ route('posts') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{ route('posts') }}">View Posts</a></li>
                            <li><a href="{{ route('createPost') }}">Create a New Post</a></li>
                          </ul>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @if (auth()->check())
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="{{ route('logout') }}">Log Out</a></li>
                              </ul>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endif

                    </ul>
                </div>
            </div>
        </nav>
