<header class="navbar">
    <div class="logo">
        <a href="index.html" class="logo-wrapper">
            <img src="{{ asset('img/logo/Logo.png') }}" alt="Logo PSM" class="logo-circle">
            
            <img src="{{ asset('img/logo/Nama Logo.png') }}" alt="PT Purnama Siwi Mandiri" class="logo-name-rect">
        </a>
    </div>

    <button class="hamburger" id="hamburger-btn">
        <i class="fa-solid fa-bars"></i>
    </button>

    <div class="nav-menu" id="nav-menu">
    <nav class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/gallery') }}">Gallery</a>
        <a href="{{ url('/clients') }}">Clients</a>
    </nav>
        <a href="{{ url('/contact') }}" class="btn-contact">CONTACT US</a>
    </div>
</header>