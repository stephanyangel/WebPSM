<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Purnama Siwi Mandiri - Home</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    @include('partials.navbar')

    <section class="hero-home">
        <div class="hero-content fade-in">
            <h1>Tank Manufacturing and Innovative Industrial Engineering</h1>
            <p>Reliable manufacturing and maintenance solutions for the global industry since 2002.</p>
            <div class="hero-buttons">
                <a href="{{ url('/services') }}" class="btn-primary">Our Services</a>
                <a href="{{ url('/gallery') }}" class="btn-secondary">All Projects</a>
            </div>
        </div>
    </section>

    <section class="about-snippet">
        <div class="about-container fade-in">
            <div class="about-text">
                <h2>Company Overview</h2>
                <div class="divider"></div>
                <p>Established in 2015, PT. Purnama Siwi Mandiri carries a legacy of engineering excellence that began in 2002. Originally founded as CV. Purnama Siwi Mandiri, our decades of experience have shaped us into a specialized leader in construction engineering, fabrication, and industrial machinery manufacturing. <br><br>We pride ourselves on being more than just a manufacturer; we are innovators. By integrating advanced automatic technology systems into every product, we empower industries—ranging from automotive and ceramics to pharmaceuticals and food production—to achieve peak operational efficiency.<br><br>At PT. Purnama Siwi Mandiri, our commitment goes beyond delivery. We emphasize superior quality, dedicated sales service, and comprehensive maintenance to ensure our clients' long-term success.</p>
                <a href="{{ url('/about') }}" class="link-arrow">More about us <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="about-image">
                <img src="{{ asset('img/(10) Automation Fabrication.jpeg') }}" alt="PT Purnama Siwi Mandiri Fabrication">
            </div>
        </div>
    </section>

    <section class="services-highlight">
        <div class="services-header fade-in">
            <h2>Our Main Services</h2>
            <p class="subtitle">High-standard industrial services focused on efficiency, durability, and specialized manufacturing excellence.</p>
        </div>
        <div class="grid-container fade-in">
            <div class="service-card">
                <div class="icon-circle"><i class="fa-solid fa-microchip"></i></div>
                <h3>Machining Processes For Industrial Part</h3>
                <p>We provide high-quality manufacturing solutions for a wide range of industrial components. Our facility is equipped to handle complex designs, ensuring every part meets your exact specifications.</p>
            </div>

            <div class="service-card">
                <div class="icon-circle"><i class="fa-solid fa-gears"></i></div>
                <h3> Special Purpose Machine [SPM]</h3>
                <p>We make machines or production process aids according to orders, mostly for companies in the automotive and industrial ceramics sectors.</p>
            </div>

            <div class="service-card">
                <div class="icon-circle"><i class="fa-solid fa-database"></i></div> 
                <h3>Tank & Vessel manufacturing</h3>
                <p>We have the required technical and regulatory capabilities, our production is accepted in various food, beverage and pharmaceutical industries.</p>
            </div>

            <div class="service-card">
                <div class="icon-circle"><i class="fa-solid fa-clipboard-check"></i></div>
                <h3>Repair [Inspaction of Tank and Equipment]</h3>
                <p>We have the required technical and regulatory capabilities, our production is accepted in various food, beverage and pharmaceutical industries.</p>
            </div>
        </div>
    </section>

    <section class="company-stats-bg">
        <div class="stats-container-3">
            <div class="stat-box">
                <h3 class="counter-wrap"><span class="counter" data-target="24">0</span>+</h3>
                <p>Years of Experience</p>
            </div>
            <div class="stat-box">
                <h3 class="counter-wrap"><span class="counter" data-target="200">0</span>+</h3>
                <p>Partners</p>
            </div>
            <div class="stat-box">
                <h3 class="counter-wrap"><span class="counter" data-target="1500">0</span>+</h3>
                <p>Website Visitors</p>
            </div>
        </div>
    </section>

    @include('partials.footer')
    
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    
    <script>
        const counters = document.querySelectorAll('.counter');
        const speed = 100;

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    </script>
</body>
</html>