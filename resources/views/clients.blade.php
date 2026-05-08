<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Purnama Siwi Mandiri - Projects</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clients.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    
    @include('partials.navbar')

    <!-- ==== OUR TRUSTED CLIENTS SECTION ==== -->
<section class="clients-section">
    <div class="clients-header">
        <h2>Our Trusted Clients</h2>
        <p>We are proud to have delivered high-quality engineering and manufacturing solutions to industry leaders.</p>
    </div>

    <div class="clients-grid">
        
        <!-- Klien 1: Toyota -->
        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Toyota Motor Manufacturing Indonesia.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Toyota Motor Manufacturing</h3>
                <p>Special Purpose Machine (SPM) and custom precision automation parts.</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/PT-Astra-Honda-Motor.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Astra Honda Motor</h3>
                <p>High-quality CNC machining processes for industrial components.</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Sugity Creatives.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Sugity Creatives</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Inti Ganda Perdana.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Inti Ganda Perdana</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Akebono.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Akebono</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Mulia Ceramics.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Mulia Ceramics</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Niro Granite.jpeg') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Niro Granite</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/PT Dharma Perkasa Gemilang.jpeg') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>PT Dharma Perkasa Gemilang</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Sosro.svg') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>PT. Sinar Sosro</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Yili.jpeg') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Yili Indonesia Dairy</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Frisian Flag.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Frisian Flag</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Lasallefood.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Lasallefood Indonesia</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Unilever.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>PT Unilever Indonesia</h3>
                <p>Fabrication of Custom Stainless Steel Storage Tanks & Mixing Vessels.</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Mayora.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>PT Mayora Indah</h3>
                <p>Conveyor system maintenance and inspection of production equipment.</p>
            </div>
        </div>

        <div class="client-card">
            <div class="client-logo-box">
                <img src="{{ asset('img/Clients Logo/Adaro.png') }}" alt="Toyota Logo" class="client-logo">
            </div>
            <div class="client-info">
                <h3>Adaro</h3>
                <p>[DESCRIPTION]</p>
            </div>
        </div>

    </div>
</section>

    @include('partials.footer')
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/clients.js') }}"></script>
</body>
</html>