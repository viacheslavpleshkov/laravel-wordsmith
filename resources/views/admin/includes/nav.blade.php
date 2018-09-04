<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ route('admin.index') }}">{{ __('admin.admin-panel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ url()->current() == route('admin.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.index') }}"><i class="fas fa-home"></i> {{ __('admin.nav-home') }}
                </a>
            </li>
            @if(in_array(Auth::user()->role->name, ['Moderator','Admin']))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-edit"></i> {{ __('admin.nav-edit-site') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ Request::is('*contact-with-me*') ? 'active' : '' }}"
                           href="{{ route('contact-with-me.index') }}"><i
                                    class="fas  fa-link"></i> {{ __('admin.nav-contact-with-me') }}</a>
                        <a class="dropdown-item {{ Request::is('*knowledge-of-languages*') ? 'active' : '' }}"
                           href="{{ route('knowledge-of-languages.index') }}"><i
                                    class="fas  fa-language"></i> {{ __('admin.nav-knowledge-of-languages') }}</a>
                        <a class="dropdown-item {{ Request::is('*courses*') ? 'active' : '' }}"
                           href="{{ route('courses.index') }}"><i
                                    class="fas fa-book-open"></i> {{ __('admin.nav-courses') }}
                        </a>
                        <a class="dropdown-item {{ Request::is('*educations*') ? 'active' : '' }}"
                           href="{{ route('educations.index') }}"><i
                                    class="fas fa-graduation-cap"></i> {{ __('admin.nav-educations') }}
                        </a>
                        <a class="dropdown-item {{ Request::is('*about-me*') ? 'active' : '' }}"
                           href="{{ route('about-me.index') }}"><i class="fas fa-user"></i> {{ __('admin.nav-about-me') }}
                        </a>
                        <a class="dropdown-item {{ Request::is('*experiences*') ? 'active' : '' }}"
                           href="{{ route('experiences.index') }}"><i
                                    class="fas fa-building"></i> {{ __('admin.nav-experiences') }}
                        </a>
                        <a class="dropdown-item {{ Request::is('*skills*') ? 'active' : '' }}"
                           href="{{ route('skills.index') }}"><i class="fas fa-list"></i> {{ __('admin.nav-skills') }}</a>
                        <a class="dropdown-item {{ Request::is('*projects*') ? 'active' : '' }}"
                           href="{{ route('projects.index') }}"><i
                                    class="fas fa-briefcase"></i> {{ __('admin.nav-projects') }}
                        </a>
                    </div>
                </li>
            @endif
            @if(in_array(Auth::user()->role->name, ['Admin']))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-users-cog"></i> {{ __('admin.nav-user-manager') }}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ Request::is('*users*') ? 'active' : '' }}"
                           href="{{ route('users.index') }}"><i
                                    class="fas fa-users"></i> {{ __('admin.nav-users') }}</a>
                        <a class="dropdown-item {{ Request::is('*roles*') ? 'active' : '' }}"
                           href="{{ route('roles.index') }}"><i
                                    class="fas fa-user-shield"></i> {{ __('admin.nav-roles') }}</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cogs"></i> {{ __('admin.nav-settings') }}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ Request::is('*settings*') ? 'active' : '' }}"
                           href="{{ route('admin.settings') }}"><i
                                    class="fas fa-wrench"></i> {{ __('admin.nav-settings') }}</a>
                        <a class="dropdown-item {{ Request::is('*logs*') ? 'active' : '' }}"
                           href="{{ route('admin.logs') }}"><fa-cogsi
                                    class="fas fa-calendar"></fa-cogsi> {{ __('admin.nav-logs') }}</a>
                    </div>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-globe"></i> {{ __('admin.nav-site-language') }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ Request::is('en*') ? 'active' : '' }}"
                       href="{{ url('en/admin') }}">{{ __('admin.nav-english') }}</a>
                    <a class="dropdown-item {{ Request::is('uk*') ? 'active' : '' }}"
                       href="{{ url('uk/admin') }}">{{ __('admin.nav-ukrainian') }}</a>
                    <a class="dropdown-item {{ Request::is('ru*') ? 'active' : '' }}"
                       href="{{ url('ru/admin') }}">{{ __('admin.nav-russian') }}</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i> {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ url()->current() == route('profile.index') ? 'active' : '' }}"
                       href="{{ route('profile.index') }}"><i
                                class="far fa-user-circle"></i> {{ __('admin.nav-profile') }}</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                                class="fas fa-sign-out-alt"></i> {{ __('admin.nav-logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>