<?php
require_once 'includes/db.php';

$page_title = "Contact Us | Madurai Tamil Ji Holidays";
$page_description = "Contact Madurai Tamil Ji Holidays. Send an enquiry, book a taxi, call us at +91 98429 16996, or visit our office in Madurai.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>

<!-- Banner Header -->
<section class="py-5 text-center text-white" style="background: var(--gradient-primary); position: relative;">
    <div class="container py-4">
        <h1 class="display-4 fw-bold">Contact Us</h1>
        <p class="lead text-warning mb-0">Get in Touch with our Travel Planners</p>
    </div>
</section>

<!-- Contact Form & Info Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Left Contact Form -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-4">
                    <h3 class="fw-bold mb-2 text-dark">Send us a Message</h3>
                    <p class="text-secondary small mb-4">Have questions about a package, or want a customized quote? Fill out the form below and we will contact you within 2-4 business hours.</p>
                    
                    <form id="mainContactForm" action="enquiry_submit.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Your Name *</label>
                                <input type="text" class="form-control bg-light border-0 py-2" placeholder="Full name" name="enquiry_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Phone Number *</label>
                                <input type="tel" class="form-control bg-light border-0 py-2" placeholder="e.g. +91 98765 43210" name="enquiry_phone" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Email Address *</label>
                                <input type="email" class="form-control bg-light border-0 py-2" placeholder="email@example.com" name="enquiry_email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">Preferred Destination</label>
                                <select class="form-select bg-light border-0 py-2" name="enquiry_package_name">
                                    <option value="" selected>General Enquiry (No Package)</option>
                                    <option value="Madurai Tours">Madurai Tours</option>
                                    <option value="Rameshwaram Tours">Rameshwaram Tours</option>
                                    <option value="Kanyakumari Tours">Kanyakumari Tours</option>
                                    <option value="Kodaikanal Tours">Kodaikanal Tours</option>
                                    <option value="Ooty Tours">Ooty Tours</option>
                                    <option value="Munnar Tours">Munnar Tours</option>
                                    <option value="Alleppey Tours">Alleppey Tours</option>
                                    <option value="Tirupati Tours">Tirupati Tours</option>
                                    <option value="Honeymoon Tours">Honeymoon Tours</option>
                                    <option value="Vehicle Rental Only">Vehicle Rental Only</option>
                                </select>
                            </div>
                        </div>

                        <!-- Date input in contact form matches requirements -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Planned Travel Date</label>
                            <input type="date" class="form-control bg-light border-0 py-2" name="enquiry_date" min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Your Message *</label>
                            <textarea class="form-control bg-light border-0" rows="4" placeholder="Tell us your travel details, budget, number of passengers, and requirements..." name="enquiry_message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-warning w-100 fw-bold text-uppercase py-3 rounded-pill shadow-sm">
                            <i class="fa-solid fa-paper-plane me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Right Contacts Info -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm p-4 p-md-5 bg-white rounded-4 h-100 d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="fw-bold mb-4 text-dark">Office Contacts</h3>
                        
                        <div class="d-flex align-items-start gap-4 mb-4">
                            <div class="fs-4 text-warning"><i class="fa-solid fa-map-location-dot"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Office Location</h6>
                                <p class="text-secondary small mb-0">Madurai Main Road, Madurai - 625001, Tamil Nadu, India</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start gap-4 mb-4">
                            <div class="fs-4 text-warning"><i class="fa-solid fa-phone-volume"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Call Support</h6>
                                <p class="mb-1"><a href="tel:+919842916996" class="text-secondary text-decoration-none text-white-hover">+91 98429 16996</a></p>
                                <span class="text-muted small">Available 24/7 for booking confirmations.</span>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start gap-4 mb-4">
                            <div class="fs-4 text-warning"><i class="fa-solid fa-envelope-open-text"></i></div>
                            <div>
                                <h6 class="fw-bold mb-1 text-dark">Email Support</h6>
                                <p class="mb-0"><a href="mailto:info@tamiljiholidays.com" class="text-secondary text-decoration-none text-white-hover">info@tamiljiholidays.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-4">
                    
                    <div class="text-center bg-light rounded-4 p-4">
                        <h5 class="fw-bold text-dark mb-2"><i class="fa-brands fa-whatsapp text-success me-2"></i>Direct WhatsApp Chat</h5>
                        <p class="text-secondary small mb-3">Skip the form and chat with our booking executive instantly on WhatsApp.</p>
                        <a href="https://wa.me/919842916996?text=Hi%20Tamil%20Ji%20Holidays!%20I%20have%20an%20enquiry." class="btn btn-success w-100 rounded-pill fw-bold text-uppercase py-2 shadow-sm" target="_blank">
                            <i class="fa-brands fa-whatsapp me-2 fs-5"></i>Start Chat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Full Width Google Map Section -->
<section class="p-0 border-top bg-light">
    <div class="container-fluid p-0">
        <!-- Interactive responsive iframe -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m10!1m3!1d125766.19568779646!2d78.04637402636284!3d9.917856799009855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b118c53a%3A0x3406e9da8979c5d9!2sMadurai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1718274092789!5m2!1sen!2sin" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
