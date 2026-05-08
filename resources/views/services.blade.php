<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Purnama Siwi Mandiri - Services</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    @include('partials.navbar')


    <section class="services-hero fade-in" style="background-color: #6C8EBF; padding: 60px 20px; text-align: center; color: white;">
        <h1 style="font-size: 32px; letter-spacing: 2px;">OUR SERVICES</h1>
        <p><br> excellence through innovative engineering and precision fabrication. We offer a diverse range of specialized services tailored to meet the rigorous demands of modern industries, ensuring reliability in every component we create.</p>
    </section>

    <!--SERVICES LIST-->
    <section class="services-list fade-in">
        <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 60px 20px;">
            
            <div class="service-row">
                <div class="service-img-box">
                    <img src="(8) Industrial Part.jpeg" alt="Machining Processes">
                </div>
                <div class="service-desc">
                    <h2>01. Machining Processes For Industrial Part</h2>
                    <div class="divider"></div>
                    <p>We provide high-quality manufacturing solutions for a wide range of industrial components. Our facility is equipped to handle complex designs, ensuring every part meets your exact specifications.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Custom production to specifications.</li>
                        <li><i class="fa-solid fa-check"></i> High precision and durability.</li>
                        <li><i class="fa-solid fa-check"></i> Various industrial material options.</li>
                    </ul>
                    <a href="DocMachiningProject.html" class="btn-outline-blue">See Project <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-row reverse">
                <div class="service-img-box">
                    <img src="(1) Automationmachine.jpeg" alt="SPM">
                </div>
                <div class="service-desc">
                    <h2>02. Special Purpose Machine [SPM]</h2>
                    <div class="divider"></div>
                    <p>We make machines or production process aids according to orders, mostly for companies in the automotive and industrial ceramics sectors.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Custom machine design solutions.</li>
                        <li><i class="fa-solid fa-check"></i> Mixing Tanks & Silos</li>
                        <li><i class="fa-solid fa-check"></i> PSM Standard Packing</li>
                    </ul>
                    <a href="DocSPMProject.html" class="btn-outline-blue">See Project <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-row">
                <div class="service-img-box">
                    <img src="(9) Tank Docummentation.jpeg" alt="Tank & Vessel">
                </div>
                <div class="service-desc">
                    <h2>03. Tank & Vessel manufacturing</h2>
                    <div class="divider"></div>
                    <p>We have the required technical and regulatory capabilities, our production is accepted in various food, beverage and pharmaceutical industries.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Storage Tanks (600L - 30.000L)</li>
                        <li><i class="fa-solid fa-check"></i> Mixing Tanks & Silos</li>
                        <li><i class="fa-solid fa-check"></i> PSM Standard Packing</li>
                    </ul>
                    <a href="DocTankVesselProject.html" class="btn-outline-blue">See Project <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="service-row reverse">
                <div class="service-img-box">
                    <img src="(13) Repair Picture.png" alt="Repair Documentation">
                </div>
                <div class="service-desc">
                    <h2>04. Repair [Inspaction of Tank and Equipment]</h2>
                    <div class="divider"></div>
                    <p>We have the required technical and regulatory capabilities, our production is accepted in various food, beverage and pharmaceutical industries.</p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-check"></i> Sanitary tank decontamination services.</li>
                        <li><i class="fa-solid fa-check"></i> Early operational risk detection.</li>
                        <li><i class="fa-solid fa-check"></i> Restoring food-grade hygiene standards.</li>
                    </ul>
                    <a href="DocRepairProject.html" class="btn-outline-blue">See Project <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </section>


    <!--SUPPORTED FACILITIES-->
   <section class="facilities-section">
    <div class="container">
        <h2 style="text-align: center; color: #2B5490; margin-bottom: 30px;">Our Supported Facilities</h2>
        
        <div class="tabs-header">
            <button class="tab-btn active" data-target="Office">Office</button>
            <button class="tab-btn" data-target="Manufacturing">Manufacturing</button>
        </div>

        <div class="tab-content active" id="Office">
            
            <div class="facility-grid">
                <img src="(5) Outside.jpeg" alt="Fasilitas Otomasi">
                <div class="facility-text">
                    <h3>Office & Meeting Area</h3>
                    <p>The entrance of PT. Purnama Siwi Mandiri reflects our commitment to quality and precision. Designed with safety at the forefront, our facility serves as a professional gateway, ready to facilitate strategic collaborations in automation and precision machining.</p>
                </div>
            </div>

            <div class="facility-grid">
                <img src="(6) Lobby.jpeg" alt="Lobby">
                <div class="facility-text">
                    <h3>Production Information Hub</h3>
                    <p>Our operational hub is designed for total efficiency. With integrated visual management boards, we ensure complete process transparency, disciplined workflows, and precision in every project.</p>
                </div>
            </div>
            
            <div class="facility-grid">
                <img src="(7) Engineer Room.jpeg" alt="Engineer Room">
                <div class="facility-text">
                    <h3>Engineer Room</h3>
                    <p>Our dedicated engineering team operates from a shared, collaborative hub. This workspace is designed for real-time problem solving, technical planning, and close teamwork to ensure every project is technically sound and efficiently managed.</p>
                </div>
            </div>

        </div> 

        <div class="tab-content" id="Manufacturing">

            <div class="facility-grid">
                <img src="(10) Automation Fabrication.jpeg" alt="Automation Fabrication ">
                <div class="facility-text">
                    <h3>Automation Fabrication</h3>
                    <p>Our production floor is where innovative designs are transformed into robust, reliable hardware. We maintain a spacious and organized facility focused on efficiency and precision.</p>
                    <ul>
                        <li><i class="fa-solid fa-check text-blue"></i>Specialized metalwork and assembly for high-accuracy custom components.</li>
                        <li><i class="fa-solid fa-check text-blue"></i>Heavy-duty machinery engineered for scalable and consistent output.</li>
                        <li><i class="fa-solid fa-check text-blue"></i>Streamlined shop-floor layout optimized for speed and safety.</li>
                    </ul>
                </div>
            </div>
    

            <div class="facility-grid">
                <img src="(11) Building 2.jpeg" alt="Building 2 ">
                <div class="facility-text">
                    <h3>Warehouse & Machining</h3>
                    <p>An integrated warehouse and machining facility supporting material storage, logistics flow, and manufacturing operations.</p>
                    <ul>
                        <li><i class="fa-solid fa-check text-blue"></i> Storage area for raw materials and components</li>
                        <li><i class="fa-solid fa-check text-blue"></i> Support facility for machining operations</li>
                        <li><i class="fa-solid fa-check text-blue"></i> Efficient material flow to support production</li>
                    </ul>
                </div>
            </div>

            <div class="facility-grid">
                <img src="(12) Building 3.jpeg" alt="Building 3">
                <div class="facility-text">
                    <h3>Fabrication Area</h3>
                    <p>A large-scale fabrication building designed for structural manufacturing, component production, and industrial project execution.</p>
                    <ul>
                        <li><i class="fa-solid fa-check text-blue"></i> Industrial fabrication and production area</li>
                        <li><i class="fa-solid fa-check text-blue"></i> Support for custom component manufacturing</li>
                        <li><i class="fa-solid fa-check text-blue"></i> Spacious facility for large-scale project work</li>
                    </ul>
                </div>
            </div>

            <div class="facility-grid">
                <img src="(14) Mashining 1.jpeg" alt="Mashining 1">
                <div class="facility-text">
                    <h3>[Location Name]</h3>
                    <p>[ D E S C R I P T I O N ]</p>
                    <ul>
                        <li><i class="fa-solid fa-check text-blue"></i> A</li>
                        <li><i class="fa-solid fa-check text-blue"></i> B</li>
                        <li><i class="fa-solid fa-check text-blue"></i> C</li>
                    </ul>
                </div>
            </div>

            <div class="facility-grid">
                <img src="(15) Mashining 2.jpeg" alt="Mashining 2">
                <div class="facility-text">
                    <h3>[Location Name]</h3>
                    <p>[ D E S C R I P T I O N ]</p>
                    <ul>
                        <li><i class="fa-solid fa-check text-blue"></i> A</li>
                        <li><i class="fa-solid fa-check text-blue"></i> B</li>
                        <li><i class="fa-solid fa-check text-blue"></i> C</li>
                    </ul>
                </div>
            </div>

            <div class="facility-grid">
                <img src="(16) Management Facility.jpeg" alt="Management facility">
                <div class="facility-text">
                    <h3>Management facility</h3>
                    <p>An office facility supporting engineering coordination, project management, and operational administration.</p>
                </div>
            </div>

            <div class="facility-grid">
                <img src="(17) Management Facility.jpeg" alt="Management facility">
                <div class="facility-text">
                    <h3>Management Facility</h3>
                    <p>An office facility supporting engineering coordination, project management, and operational administration.</p>

                </div>
            </div>


        </div>
        
    </section>

    @include('partials.footer')

    <script src="{{ asset('js/global.js') }}"></script>
    <script src="{{ asset('js/services.js') }}"></script>
</body>
</html>