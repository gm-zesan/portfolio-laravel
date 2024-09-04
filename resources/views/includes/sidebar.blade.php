<!-- mobile header -->
<header class="mobile-header-1">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <!-- logo image -->
                <div class="site-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo-light.png') }}" alt="omor" />
                    </a>
                </div>
            </div>
            <div class="col-6 text-right">
                <!-- menu icon -->
                <div class="menu-icon d-inline-flex">
                    <button>
                    <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- desktop header -->
<header class="desktop-header-1 light d-flex align-items-start flex-column">
    <!-- logo image -->
    <div class="site-logo">
        <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo-light.png') }}" alt="zesan" />
        </a>
    </div>
    <nav>
        <ul class="vertical-menu scrollspy">
            <li class="active"><a href="{{ route('home') }}"><i class="icon-home"></i>Home</a></li>
            <li><a href="{{ route('work.experiences') }}"><i class="icon-graduation"></i>Work Experience</a></li>
            <li><a href="{{ route('projects') }}"><i class="icon-layers"></i>Projects</a></li>
            <li><a href="{{ route('blogs') }}"><i class="icon-note"></i>Blog</a></li>
            <li><a href="{{ route('contact') }}"><i class="icon-bubbles"></i>Contact</a></li>
        </ul>
    </nav>
    <div class="footer">
        <span class="copyright">Copyright © 2024 All rights reserved.</span>
    </div>
</header>