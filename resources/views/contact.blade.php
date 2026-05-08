<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Purnama Siwi Mandiri - Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    
    @include('partials.navbar')

    <section class="contact-hero fade-in">
        <h1>CONTACT US</h1>
        <div class="hero-dots">
            <span></span><span></span><span></span><span></span>
        </div>
        <p>Ready to elevate your production efficiency? Our expert engineering team is here to provide tailored solutions for your automation, fabrication, and machinery needs. Let’s collaborate to build the future of your industry.</p>
    </section>

    <!-- CONTACT CARDS SECTION -->
    <section class="contact-cards fade-in">
        
        <div class="c-card">
            <i class="fa-solid fa-house"></i>
            <h3>Visit Us</h3>
            <p>Visit our facility to discuss your engineering needs or see our manufacturing process firsthand.</p>
            <a href="https://maps.google.com/?cid=12977549881627744901&g_mp=Cidnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLlNlYXJjaFRleHQ">Jl. Swadaya I No. 85 Kalijambe,<br>Lambangsari, Tambun Selatan, Bekasi</a>
        </div>

        <div class="c-card">
            <i class="fa-solid fa-phone"></i>
            <h3>Call Us</h3>
            <p>Connect with our expert team for immediate technical support or inquiries regarding our services.</p>
            <a href="tel:+622182601337">+62 - 21 - 82601337 [Phone] <br></a>
            <a href="tel:+622182608665">+62 - 21- 82608665 [Fax]</a>
        </div>

        <div class="c-card">
            <i class="fa-solid fa-envelope"></i>
            <h3>Email Us</h3>
            <p>Send us your detailed project requirements or Request for Quotation (RFQ) for a formal proposal.</p>
            <a href="mailto:admin@purnamasiwi.com">admin@purnamasiwi.com</a>
            <a href="mailto:agung@purnamasiwi.com">agung@purnamasiwi.com</a>
        </div>

    </section>

    <!-- FORM CONTACT -->

   <section class="contact-section">
        <div class="contact-wrapper">
            
            <div class="contact-form-box">
                <h2>Send us a message</h2>
                <p>Do you have a question? A complaint? Or need any help to choose the right engineering solution from PT. Purnama Siwi Mandiri. Feel free to contact us.</p>
                
                @if(session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px; text-align: center; font-weight: bold;">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/kirim-pesan" method="POST" class="contact-form">
                    
                    @csrf

                    <div class="form-row">
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Enter your first name">
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Enter your last name">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="input-group">
                            <label>Contact Details</label>
                            <div class="phone-input">
                                <select name="phone_code">
                                    <option>+62</option>
                                    <option>+65</option>
                                </select>
                                <input type="tel" name="phone_number" placeholder="Enter your contact number">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Company Name</label>
                            <input type="text" name="company" placeholder="Enter your Company name">
                        </div>
                    </div>

                    <div class="input-group">
                        <label>Message</label>
                        <textarea name="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>

                    <div class="submit-row">
                        <button type="submit" class="btn-submit">Send a Message</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- MAPS SECTION -->
    <section class="map-section fade-in">
        <iframe src="https://maps.google.com/maps?q=PT%20Purnama%20Siwi%20Mandiri,%20Lambangsari,%20Bekasi&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    @include('partials.footer')

    <script src="{{ asset('js/global.js') }}"></script>



</body>
</html>
