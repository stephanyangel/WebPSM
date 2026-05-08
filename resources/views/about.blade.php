<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Purnama Siwi Mandiri - About Us</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    @include('partials.navbar')


    <section class="about-intro fade-in">
        <div class="about-intro-content">
            
            <div class="about-intro-text">
                <h1>About Us</h1>
                <p>PT. Purnama Siwi Mandiri established in 2015, previously CV. Purnama Siwi had been established in 2002 which engaged in the field of engineering supplier, construction engineering and fabrication.</p>
                <p>Nowaday, PT. Purnama Siwi Mandiri specializes in the production of various tanks for the food, beverage, and pharmaceutical industries, as well as the manufacture of industrial machinery. Our machines can be applied in various industries, including the automotive, ceramics, pharmaceutical, food, and other industries.</p>
                <p>PT. Purnama Siwi Mandiri focuses on finding innovative ways and development base on automatic technology system in each product. PT. Purnama Siwi Mandiri is committed to accentuate quality, sales service and maintenance with strengthen capabilities in providing the best.</p>
            </div>
            
            <div class="about-intro-image">
                <img src="gambar-gedung.jpg" alt="Picture">
            </div>
        </div>
    </section>

    <section class="team-section fade-in">
        <div class="team-header">
            <h2>Board of Directors</h2>
            <p>Leaders who direct the company's vision and mission.</p>
        </div>
        <div class="team-grid">
            <div class="team-card">
                <div class="profile-img-wrapper">
                    <img src="https://via.placeholder.com/150" alt="Picture">
                </div>
                <h3>Agung Isriyanta</h3>
                <p class="position">President Director</p>
            </div>
        </div>
    </section>

<!-- =========================================
   VISION & MISSION SECTION
========================================= -->
<section class="vision-mission-section">
    <div class="vm-container">
        
        <!-- Kartu Visi -->
        <div class="vm-card">
            <div class="vm-icon">
                <i class="fa-solid fa-eye"></i>
            </div>
            <h3>Our Vision</h3>
            <p>To become a leading, solution-oriented, and innovative manufacturing company.</p>
        </div>

        <!-- Kartu Misi -->
        <div class="vm-card">
            <div class="vm-icon">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <h3>Our Mission</h3>
            <ul class="vm-list">
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Providing best services.</span>
                </li>
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Providing best solution.</span>
                </li>
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span>To pursue continuous innovation, development, and adaptability in a rapidly changing world.</span>
                </li>
            </ul>
        </div>

    </div>
</section>


<!-- =========================================
   HISTORY SECTION
========================================= -->
    <section class="history-section">
    <div class="history-header">
        <h2>Our Journey</h2>
        <p>To pursue continuous innovation, development, and adaptability in a rapidly changing world.</p>
    </div>

    <div class="timeline-container">
        <!-- Garis Abu-abu (Track) dan Garis Biru (Yang Berjalan) -->
        <div class="timeline-track">
            <div class="timeline-fill" id="scroll-line"></div>
        </div>

        <!-- 2002 (Kiri) -->
        <div class="timeline-item left">
            <div class="timeline-dot">01</div>
            <div class="timeline-content">
                <span class="timeline-year">2002</span>
                <h3>Purnama Siwi was founded</h3>
                <p>Start of business, supplying technical equipment. Sector: ceramic and automotive industry.</p>
            </div>
        </div>

        <!-- 2007 (Kanan) -->
        <div class="timeline-item right">
            <div class="timeline-dot">02</div>
            <div class="timeline-content">
                <span class="timeline-year">2007</span>
                <h3>Development Phase 1</h3>
                <p>Invest on workshop (400 m²). <br> > Owning 3 machines. <br>> In-house part production.</p>
            </div>
        </div>

        <!-- 2008 (Kiri) -->
        <div class="timeline-item left">
            <div class="timeline-dot">03</div>
            <div class="timeline-content">
                <span class="timeline-year">2008</span>
                <h3>Accepting Project</h3>
                <p>Starting to accept challenges to create products through projects.</p>
            </div>
        </div>

        <!-- 2010 (Kanan) -->
        <div class="timeline-item right">
            <div class="timeline-dot">04</div>
            <div class="timeline-content">
                <span class="timeline-year">2010</span>
                <h3>Enabling Automation Solution</h3>
                <p>First automation-product projects.</p>
            </div>
        </div>
        
        <!-- 2013 (Kiri) -->
        <div class="timeline-item left">
            <div class="timeline-dot">05</div>
            <div class="timeline-content">
                <span class="timeline-year">2013</span>
                <h3>Development Phase</h3>
                <p>We are starting to accept jobs on a larger scale and more complex.<br>> Warehouse expansion (+300 m²). <br>> Additional Manpower.</p>
            </div>
        </div>
        
        <!-- 2013 (Kanan) -->
        <div class="timeline-item right">
            <div class="timeline-dot">06</div>
            <div class="timeline-content">
                <span class="timeline-year">2013</span>
                <h3>PT Purnama Siwi Mandiri</h3>
                <p>The company's organization is growing bigger and starting this year PT. Purnama Siwi Mandiri was estabilished.</p>
            </div>
        </div>
        
        <!-- 2015 (Kiri) -->
        <div class="timeline-item left">
            <div class="timeline-dot">07</div>
            <div class="timeline-content">
                <span class="timeline-year">2015</span>
                <h3>Business Expansion</h3>
                <p>PSM With enthusiasm and better management began to move and rise in business. Reach new business segment :<br><b>Pharmaceutical and Food & Beverages Industries.</b></p>
            </div>
        </div>

        <!-- 2019 (Kanan) -->
        <div class="timeline-item right">
            <div class="timeline-dot">08</div>
            <div class="timeline-content">
                <span class="timeline-year">2019</span>
                <h3>Pandemic</h3>
                <p>Company able to survive Pandemic with the all of our strength</p>
            </div>
        </div>

        <!-- 2022 (Kiri) -->
        <div class="timeline-item left">
            <div class="timeline-dot">09</div>
            <div class="timeline-content">
                <span class="timeline-year">2022</span>
                <h3>Development Phase 3</h3>
                <p>We continue to improve ourselves and always provide the best quality for our customers.<br><b>> New Plant (3000 m²)</b></p>
            </div>
        </div>

        <!-- 2025 (Kanan) -->
        <div class="timeline-item right">
            <div class="timeline-dot">10</div>
            <div class="timeline-content">
                <span class="timeline-year">2025</span>
                <h3>Purnama Siwi Mandiri Today</h3>
            </div>
        </div>

        </div>
    </section>

<!-- =========================================
 CAPABILITIES & CERTIFICATIONS
========================================= -->
<section class="capabilities-section">
    <div class="cap-header">
        <h2>Capabilities & Certifications</h2>
        <p>Backed by official government standards and international certifications, ensuring every project meets the highest quality and safety requirements.</p>
    </div>

    <div class="cap-grid">
        
        <!-- Kartu 1: WPS (Buku Resep) -->
        <div class="cap-card">
            <div class="cap-icon">
                <i class="fa-solid fa-file-signature"></i>
            </div>
            <h3>Welding Procedure Specification (WPS)</h3>
            <span class="cap-issuer">Issuer: Kemenaker RI</span>
            <p>Government-approved standardized welding procedures ensuring structural integrity and safety compliance.</p>
            <div class="cap-details">
                <strong>Registered Docs:</strong>
                <ul>
                    <li>WGT 8-12, PQR PGT 8-12 GTAW</li>
                    <li>WGT 8-2.4, PQR PGTS 8-2.4 GTAW</li>
                </ul>
            </div>
            <a href="LINK_GDRIVE" target="_blank" class="btn-gdrive-card">
                <i class="fa-brands fa-google-drive"></i> View Certificates
            </a>
        </div>

        <!-- Kartu 2: WPQ (Koki Las) -->
        <div class="cap-card">
            <div class="cap-icon">
                <i class="fa-solid fa-user-gear"></i>
            </div>
            <h3>Certified Welder Qualification (WPQ)</h3>
            <span class="cap-issuer">Issuer: LRQA (ASME IX Standard)</span>
            <p>Our fabrication team consists of internationally certified personnel, trained to handle complex technical demands.</p>
            <div class="cap-details">
                <strong>Certified Personnel:</strong>
                <ul class="two-column-list">
                    <li>Anjar Bahrudin</li>
                    <li>Moh Imam Khanif</li>
                    <li>Nurwandi</li>
                    <li>Restu Dwi Aminto</li>
                    <li>Rudi Ermiyanto</li>
                </ul>
            </div>
            <a href="LINK_GDRIVE" target="_blank" class="btn-gdrive-card">
                <i class="fa-brands fa-google-drive"></i> View Certificates
            </a>
        </div>

        <div class="cap-card">
            <div class="cap-icon">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
            </div>
            <h3>Testing Expert (NDT Level II)</h3>
            <span class="cap-issuer">Issuer: NDT Institut</span>
            <p>Certified Liquid Penetrant Testing capabilities for rigorous quality control and flawless manufacturing output.</p>
            <div class="cap-details">
                <strong>Certified Inspectors:</strong>
                <ul>
                    <li>Setyo Handono</li>
                    <li>Moh Imam Khanif</li>
                </ul>
            </div>
            <a href="LINK_GDRIVE" target="_blank" class="btn-gdrive-card">
                <i class="fa-brands fa-google-drive"></i> View Certificates
            </a>
        </div>

    </section>

<!-- =========================================
   CODE & STANDARD KNOWLEDGE SECTION
========================================= -->
<section class="standards-section">
    <div class="standards-header">
        <h2>Code & Standard Knowledge</h2>
        <p>Our engineering and manufacturing processes strictly comply with international codes and standards to ensure maximum safety, reliability, and quality.</p>
    </div>

  <div class="standards-grid">
        
        <!-- Kartu 1: ASME -->
        <div class="std-card">
            <div class="std-badge">
                <!-- Nah, ini dia tempat fotonya! Ganti src sesuai nama file logomu -->
                <img src="logo-asme.png" alt="ASME Logo" class="std-logo">
                <h3>ASME</h3>
            </div>
            <h4 class="std-subtitle">American Society of Mechanical Engineers</h4>
            <ul class="std-list">
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>Sect. II:</strong> Material Specifications</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>Sect. V:</strong> Nondestructive Examination</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>Sect. VIII-1, 2:</strong> Rules for Construction of Pressure Vessels</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>Sect. IX:</strong> Welding, Brazing, and Fusing Qualifications</span></li>
            </ul>
        </div>

        <!-- Kartu 2: EN ISO & PED -->
        <div class="std-card">
            <div class="std-badge">
                <!-- Tempat foto ISO -->
                <img src="logo-en-iso.png" alt="EN ISO Logo" class="std-logo">
                <h3>EN ISO</h3>
            </div>
            <h4 class="std-subtitle">European & International Standards</h4>
            <ul class="std-list">
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>EN 13445 - 1 to 4:</strong> Unfired Pressure Vessel</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>EN 14122 - 1 to 4:</strong> Safety of machinery - Permanent means of access to machinery</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>PED:</strong> Pressure Equipment Directive compliance</span></li>
            </ul>
        </div>

        <!-- Kartu 3: Hygienic Design -->
        <div class="std-card">
            <div class="std-badge">
                <!-- Tempat foto EHEDG -->
                <img src="logo-ehedg.png" alt="Hygienic Logo" class="std-logo">
                <h3>Hygienic</h3>
            </div>
            <h4 class="std-subtitle">Hygienic & Bioprocessing Standards</h4>
            <ul class="std-list">
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>ASME BPE:</strong> Bio Processing Equipment standard for purity and safety.</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span><strong>EHEDG:</strong> European Hygienic Engineering & Design Group principles.</span></li>
                <li><i class="fa-solid fa-circle-check"></i> <span>Guaranteed safety for food, beverage, and pharmaceutical industries.</span></li>
            </ul>
        </div>

    </div>
    </section>

<!-- =========================================
   ENGINEERING CAPABILITIES SECTION
========================================= -->
    <section class="engineering-section">
        <div class="eng-header">
            <h2>Engineering Capabilities</h2>
            <p>Equipped with industry-leading software to provide precise 2D detailing and comprehensive 3D modelling solutions for every fabrication need.</p>
        </div>

        <div class="eng-grid">

            <!-- Kartu 1: 2D Detailing -->
            <div class="eng-card">
                <div class="eng-icon">
                    <i class="fa-solid fa-pen-ruler"></i>
                </div>
                <h3>Design 2D Detailing</h3>
                <p>Producing highly accurate technical drawings, schematics, and layouts for fabrication and manufacturing processes.</p>
                
                <!-- Daftar Software 2D -->
                <div class="tech-stack">
                    <span class="tech-badge"><i class="fa-solid fa-compass-drafting"></i> Autodesk AutoCAD</span>
                </div>
            </div>

            <!-- Kartu 2: 3D Modelling -->
            <div class="eng-card">
                <div class="eng-icon">
                    <i class="fa-solid fa-cubes"></i>
                </div>
                <h3>Design 3D Modelling</h3>
                <p>Creating advanced 3D visualizations, simulations, and plant designs to ensure structural and spatial accuracy before production.</p>
                
                <!-- Daftar Software 3D -->
                <div class="tech-stack">
                    <span class="tech-badge"><i class="fa-solid fa-cube"></i> AutoCAD Plant 3D</span>
                    <span class="tech-badge"><i class="fa-solid fa-layer-group"></i> SolidWorks</span>
                    <span class="tech-badge"><i class="fa-solid fa-drafting-compass"></i> ZW3D</span>
                </div>
            </div>

        </div>
    </section>
    
    @include('partials.footer')

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/about.js') }}"></script>
</body>
</html>