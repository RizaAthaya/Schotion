<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar">
    <div class="all-navbar">
        <a href="/">
            <h3 class="logo">Schotion</h3>
        </a>
        @if (Auth::user())
            @if (Session::get('user')->peran->nama === 'admin')
                <ul class="list">
                    <li><a href="/admin/scholarship">Scholarship</a></li>
                    <li><a href="/admin/competition">Competition</a></li>
                    <li><a href="/admin/account">Account</a></li>
                </ul>
                <div class="buttons">
                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="login">
                        @csrf
                        <button class="logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                    </form> <a class="register">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="person">
                                <path fillRule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clipRule="evenodd" />
                            </svg>
                            <h3>
                                {{ Session::get('user')->nama_lengkap }}
                            </h3>
                        </button>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="burger">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                    <div class="mobile-menu" id="mobileMenu">
                        <ul class="mobile-list">
                            <li><a href="/admin/scholarship">Scholarship</a></li>
                            <li><a href="/admin/competition">Competition</a></li>
                            <li><a href="/admin/account">Account</a></li>
                            <li>
                                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <button class="logout"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @elseif (Session::get('user')->peran->nama === 'mahasiswa')
                <ul class="list">
                    <li><a href="/">Home</a></li>
                    <li><a href="/scholarship">Scholarship</a></li>
                    <li><a href="/competition">Competition</a></li>
                </ul>
                <div class="buttons">
                    <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="login">
                        @csrf
                        <button class="logout"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                    </form>
                    <a class="register">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="person">
                                <path fillRule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clipRule="evenodd" />
                            </svg>
                            <h3>
                                {{ Session::get('user')->nama_lengkap }}
                            </h3>
                        </button>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                        stroke="currentColor" class="burger">
                        <path strokeLinecap="round" strokeLinejoin="round"
                            d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                    </svg>
                    <div class="mobile-menu" id="mobileMenu">
                        <ul class="mobile-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="/scholarship">Scholarship</a></li>
                            <li><a href="/competition">Competition</a></li>
                            <li>
                                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <button class="logout"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endif
        @else
            <div class="buttons">
                <a class="login" href="/auth/login">Login</a>
                <a class="register" href="/auth/register">
                    <button>
                        <h3>Join Us</h3> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            strokeWidth={2} stroke="currentColor" class="arrow">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="burger">
                    <path strokeLinecap="round" strokeLinejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
                <div class="mobile-menu" id="mobileMenu">
                    <ul class="mobile-list">
                        <li><a href="/auth/login">Login</a></li>
                        <li><a href="/auth/register">Register</a></li>
                    </ul>
                </div>
            </div>
        @endif


    </div>
</nav>


<script src="{{ asset('js/navbar.js') }}"></script>
