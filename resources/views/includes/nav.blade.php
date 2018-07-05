<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('site.index') }}"><img src="{{ asset('img/logo.png') }}"
                                                                      alt="Пік Анаконди" width="85px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('site.index') }}"><i class="fas fa-newspaper"></i> Новини</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.about-us') }}"><i class="fas fa-bars"></i></i> Про нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.rules') }}"><i class="fas fa-lock"></i> Правила клубу</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.athletes') }}"><i class="fas fa-users"></i> Cпортсмени</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.photo-gallery') }}"><i class="fas fa-images"></i> Фото
                        галерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('site.write-to-us') }}"><i class="fas fa-envelope"></i> Написати
                        нам</a>
                </li>
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Профіль</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('login') }}" class="dropdown-item">Вхід</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Реєстрація</a>
                            <a href="{{ route('password.request') }}" class="dropdown-item">Нагадати пароль</a>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-user"></i> {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Профіль</a>
                            <a href="" class="dropdown-item">Налаштування</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">Выход</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>