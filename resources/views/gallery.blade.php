<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Purnama Siwi Mandiri - Gallery</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gallery.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    @include('partials.navbar')

    <section class="hero-gallery" style="background-color: #6C8EBF; padding: 60px 20px; text-align: center; color: white;">
        <h1 style="font-size: 32px; letter-spacing: 2px;">OUR PROJECTS IN ACTION</h1>
        <p><br>Explore our comprehensive portfolio of engineering, fabrication, and automation solutions delivered across various industries.</p>
    </section>

    <section id="gallery-works" class="works">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 60px 20px;">

            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="A">A</button>
                <button class="filter-btn" data-filter="B">B</button>
                <button class="filter-btn" data-filter="C">C</button>
            </div>

            <div class="works-grid">

                <div class="work-item" data-category="A">
                    <div class="card-slider">
                        <div class="card-slides">
                            <img src="..." alt="Project Picture 1">
                            <img src="..." alt="Project Picture 2">
                            <img src="..." alt="Project Picture 3">
                        </div>
                        <button class="mini-btn prev-btn">&#10094;</button>
                        <button class="mini-btn next-btn">&#10095;</button>
                    </div>

                    <div class="work-content">
                        <h3>Project Name</h3>
                        <p>[DESCRIPTION]</p>
                        <div class="work-tags">
                            <span>TIPE A</span>
                        </div>
                    </div>
                </div>

                <div class="work-item" data-category="B">
                    <div class="card-slider">
                        <div class="card-slides">
                            <img src="..." alt="Project Picture 1">
                            <img src="..." alt="Project Picture 2">
                            <img src="..." alt="Project Picture 3">
                        </div>
                        <button class="mini-btn prev-btn">&#10094;</button>
                        <button class="mini-btn next-btn">&#10095;</button>
                    </div>

                    <div class="work-content">
                        <h3>Project Name</h3>
                        <p>[Description]</p>
                        <div class="work-tags">
                            <span>TIPE B</span>
                        </div>
                    </div>
                </div>

                <div class="work-item" data-category="C">
                    <div class="card-slider">
                        <div class="card-slides">
                            <img src="..." alt="Project Picture 1">
                            <img src="..." alt="Project Picture 2">
                            <img src="..." alt="Project Picture 3">
                        </div>
                        <button class="mini-btn prev-btn">&#10094;</button>
                        <button class="mini-btn next-btn">&#10095;</button>
                    </div>

                    <div class="work-content">
                        <h3>Project Name</h3>
                        <p>[Description]</p>
                        <div class="work-tags">
                            <span>TIPE C</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.footer')
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>
    
</body>
</html>