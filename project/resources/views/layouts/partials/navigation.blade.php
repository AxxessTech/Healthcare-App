<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agencies.index') }}">Agencies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('caregivers-directory') }}">Caregivers Directory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                </li>
            </ul>
        </div>

    </div>
</nav>
