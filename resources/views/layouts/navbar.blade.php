<nav class="navbar py-4 navbar-expand-lg navbar-light bg-transparent pad-0-5-rem">
    <div class="container-fluid p-md-0 p-sm-0 ">
        <a class="navbar-brand nav-logo" href="/">
            <img id="logo" src="{{ asset('assets/img/logo2.png') }}" alt="...">
        </a>

        {{-- Responsive Toggle --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Responsive Toggle --}}

        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-3 px-0">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('user.index') }}">About</a>
                </li>
                <li class="nav-item px-lg-3 px-0">
                    <a class="nav-link {{ Request::is('project') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('user.project') }}">Project</a>
                </li>
                <li class="nav-item px-lg-3 px-0">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('user.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
