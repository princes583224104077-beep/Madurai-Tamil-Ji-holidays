<?php
require_once 'includes/db.php';

$page_title = "Frequently Asked Questions | Madurai Tamil Ji Holidays";
$page_description = "Get answers to common questions about our tour packages, vehicle rentals, booking process, pricing, cancellation policy, and more at Tamil Ji Holidays.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

$faqs = [
    [
        'category' => 'Booking & Payment',
        'icon' => 'fa-solid fa-credit-card',
        'questions' => [
            ['q' => 'How do I book a tour package or vehicle rental?', 'a' => 'You can book via our website using the "Book Now" button, call us at +91 98429 16996, or send a WhatsApp message anytime. Our team responds within 30 minutes during business hours (7 AM – 10 PM daily).'],
            ['q' => 'What payment methods are accepted?', 'a' => 'We accept cash, UPI (GPay, PhonePe, Paytm), NEFT/RTGS bank transfer, and card payments. For large group tours, 30-40% advance payment secures your booking, with the balance due on tour commencement.'],
            ['q' => 'Is online advance payment mandatory to confirm a booking?', 'a' => 'For regular cab rentals, no advance is needed — just a confirmed call/WhatsApp booking works. For tour packages involving hotels and itineraries, we require at least 30% advance to reserve all arrangements.'],
            ['q' => 'Will I receive a booking confirmation?', 'a' => 'Yes! Once your booking is confirmed, you will receive a detailed confirmation via WhatsApp and email within 2 hours, including vehicle details, driver name, phone number, and trip itinerary.'],
        ]
    ],
    [
        'category' => 'Tours & Packages',
        'icon' => 'fa-solid fa-map-location-dot',
        'questions' => [
            ['q' => 'Can I customize the tour itinerary?', 'a' => 'Absolutely! All our packages are fully customizable. Tell us your preferred destinations, travel dates, budget, hotel star rating, and number of travelers and we will create a 100% personalized itinerary just for you.'],
            ['q' => 'Are hotel accommodations included in tour packages?', 'a' => 'Yes, our standard packages include budget to mid-range hotels. Premium and luxury hotel upgrades (3-star, 4-star, 5-star) are available at additional cost and can be requested during booking.'],
            ['q' => 'Do you arrange pilgrimage special darshan tickets (Tirupati, etc.)?', 'a' => 'Yes! We arrange VIP/special entry darshan tickets for Tirupati Tirumala, Meenakshi Temple, and other prominent temples across South India. This is included in our pilgrimage package pricing.'],
            ['q' => 'Do you offer North India tour packages from Madurai?', 'a' => 'Yes, we offer complete flight + cab + hotel packages to Delhi, Agra, Jaipur (Golden Triangle), Rajasthan, Goa, and Kashmir. Contact us for custom North India itinerary pricing.'],
        ]
    ],
    [
        'category' => 'Vehicle Rentals & Fleet',
        'icon' => 'fa-solid fa-car',
        'questions' => [
            ['q' => 'What vehicles are available for rental?', 'a' => 'Our fleet includes Sedan (4 seats), SUV (7 seats), Innova Crysta (7 seats), Tempo Traveller (12 seats), Mini Bus (21 seats), Luxury Bus (35 seats), and Volvo Coach (45 seats). All vehicles are well-maintained and fully air-conditioned.'],
            ['q' => 'What is the minimum km billing for outstation trips?', 'a' => 'For outstation travel, we apply a minimum of 250 km per calendar day for sedans/SUVs and 300 km/day for larger vehicles. This covers fuel and driver allowance on full-day hire.'],
            ['q' => 'Are the drivers background-checked and professional?', 'a' => 'All our drivers are verified, licensed, and experienced. They undergo police background checks, have clean driving records, and are familiar with South India routes and local tourist spots.'],
            ['q' => 'Is a driver allowance (Driver Beta) charged separately?', 'a' => 'Yes, for overnight or multi-day trips, a nominal driver allowance (₹250–₹400/day depending on vehicle) is applicable. This covers the driver\'s accommodation and meals on overnight halts.'],
        ]
    ],
    [
        'category' => 'Cancellation & Refunds',
        'icon' => 'fa-solid fa-rotate-left',
        'questions' => [
            ['q' => 'What is the cancellation policy?', 'a' => 'Cancellations made 72+ hours before travel date: Full refund minus ₹200 processing fee. 48–72 hours before: 50% refund. Less than 48 hours: No refund. For tour packages with hotel bookings, hotel cancellation rules apply separately.'],
            ['q' => 'What if I need to reschedule my trip?', 'a' => 'Trip rescheduling is accepted free of charge if done more than 48 hours before departure. Rescheduling within 48 hours is subject to a ₹500 rescheduling fee. Please call us or WhatsApp to reschedule.'],
            ['q' => 'What happens if the vehicle breaks down mid-journey?', 'a' => 'In the unlikely event of a breakdown, we immediately dispatch a replacement vehicle from our fleet at zero extra cost to you. Your safety and journey continuity are our top priority.'],
        ]
    ],
    [
        'category' => 'Safety & Support',
        'icon' => 'fa-solid fa-shield-halved',
        'questions' => [
            ['q' => 'Is 24/7 customer support available?', 'a' => 'Yes! Our WhatsApp and phone support is active 24 hours a day for trip-related emergencies. For new bookings, our team is available from 7 AM to 10 PM daily. Call +91 98429 16996 anytime.'],
            ['q' => 'Are vehicles sanitized and COVID-safe?', 'a' => 'Yes. All vehicles undergo deep-cleaning and sanitization before every trip. Hand sanitizers are available inside the vehicles. Our drivers are fully vaccinated and follow hygiene protocols.'],
            ['q' => 'Do you provide travel insurance coverage?', 'a' => 'We facilitate passenger insurance for tour packages. For cab rentals, third-party vehicle insurance is mandatory and included. We recommend clients obtain separate personal travel insurance for added peace of mind.'],
        ]
    ],
];
?>

<!-- Page Banner -->
<section class="page-banner-section">
    <div class="container py-5 text-center" style="position: relative; z-index: 2;">
        <span class="page-banner-tag"><i class="fa-solid fa-circle-question me-2"></i>Help Centre</span>
        <h1 class="display-4 fw-bold text-white mt-3">Frequently Asked Questions</h1>
        <p class="lead text-warning mb-0">Everything You Need to Know Before You Travel</p>
    </div>
</section>

<!-- FAQ Search Bar -->
<section class="py-4 bg-white shadow-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-light border-end-0 border-0">
                        <i class="fa-solid fa-magnifying-glass text-muted"></i>
                    </span>
                    <input type="text" id="faqSearch" class="form-control bg-light border-start-0 border-0 py-3"
                           placeholder="Search FAQ... e.g. refund, booking, cancellation">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Categories and Accordion -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Left: Category Nav -->
            <div class="col-lg-3">
                <div class="faq-category-nav sticky-top" style="top: 150px;">
                    <h6 class="fw-bold text-muted text-uppercase mb-3 small ls-2">Categories</h6>
                    <div class="d-flex flex-column gap-2" id="faqCatNav">
                        <?php foreach ($faqs as $idx => $section): ?>
                        <a href="#faq-cat-<?php echo $idx; ?>"
                           class="faq-cat-link <?php echo ($idx === 0) ? 'active' : ''; ?>">
                            <i class="<?php echo $section['icon']; ?> me-2"></i>
                            <?php echo htmlspecialchars($section['category']); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>

                    <div class="faq-contact-box mt-4">
                        <p class="small fw-bold text-dark mb-2">Still have questions?</p>
                        <a href="https://wa.me/919842916996" class="btn btn-success btn-sm w-100 rounded-pill fw-bold mb-2" target="_blank">
                            <i class="fa-brands fa-whatsapp me-2"></i>WhatsApp
                        </a>
                        <a href="tel:+919842916996" class="btn btn-outline-dark btn-sm w-100 rounded-pill fw-bold">
                            <i class="fa-solid fa-phone me-2"></i>Call Us
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right: FAQ Accordions -->
            <div class="col-lg-9" id="faqMainContent">
                <?php foreach ($faqs as $cidx => $section): ?>
                <div class="faq-section mb-5" id="faq-cat-<?php echo $cidx; ?>">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="faq-section-icon">
                            <i class="<?php echo $section['icon']; ?>"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0"><?php echo htmlspecialchars($section['category']); ?></h3>
                    </div>

                    <div class="accordion faq-accordion" id="faqAccordion<?php echo $cidx; ?>">
                        <?php foreach ($section['questions'] as $qidx => $item): ?>
                        <div class="accordion-item faq-item mb-2">
                            <h2 class="accordion-header">
                                <button class="accordion-button faq-btn <?php echo ($cidx === 0 && $qidx === 0) ? '' : 'collapsed'; ?>"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq-<?php echo $cidx; ?>-<?php echo $qidx; ?>"
                                        aria-expanded="<?php echo ($cidx === 0 && $qidx === 0) ? 'true' : 'false'; ?>">
                                    <?php echo htmlspecialchars($item['q']); ?>
                                </button>
                            </h2>
                            <div id="faq-<?php echo $cidx; ?>-<?php echo $qidx; ?>"
                                 class="accordion-collapse collapse <?php echo ($cidx === 0 && $qidx === 0) ? 'show' : ''; ?>"
                                 data-bs-parent="#faqAccordion<?php echo $cidx; ?>">
                                <div class="accordion-body faq-body">
                                    <i class="fa-solid fa-circle-check text-success me-2"></i>
                                    <?php echo htmlspecialchars($item['a']); ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>

                <!-- No Results -->
                <div id="faqNoResults" class="text-center py-5 d-none">
                    <div class="fs-1 text-muted mb-3"><i class="fa-solid fa-face-sad-cry"></i></div>
                    <h5 class="fw-bold text-muted">No matching questions found</h5>
                    <p class="text-secondary small">Try a different keyword or contact us directly.</p>
                    <a href="contact.php" class="btn btn-warning rounded-pill px-4 fw-bold">Ask Your Question</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Still Need Help CTA -->
<section class="py-5 text-white text-center" style="background: linear-gradient(135deg, #0b132b 0%, #0099cc 100%);">
    <div class="container">
        <h3 class="fw-bold mb-2">Couldn't Find Your Answer?</h3>
        <p class="text-white-50 mb-4">Our travel experts are ready to help you plan every detail of your journey.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn btn-warning rounded-pill px-4 py-2 fw-bold">
                <i class="fa-solid fa-paper-plane me-2"></i>Send Us a Message
            </a>
            <a href="https://wa.me/919842916996?text=Hi%20Tamil%20Ji%20Holidays!%20I%20have%20a%20question." class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold" target="_blank">
                <i class="fa-brands fa-whatsapp me-2"></i>Chat on WhatsApp
            </a>
        </div>
    </div>
</section>

<style>
.page-banner-section {
    background: linear-gradient(135deg, #0b132b 0%, #0077aa 60%, #0099cc 100%);
    padding: 80px 0 60px; position: relative; overflow: hidden;
}
.page-banner-section::before {
    content: ''; position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23fff' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='20'/%3E%3C/g%3E%3C/svg%3E");
}
.page-banner-tag {
    background: rgba(245,166,35,0.2); border: 1px solid rgba(245,166,35,0.4);
    color: #f5a623; font-size: 0.82rem; font-weight: 700;
    padding: 6px 18px; border-radius: 20px; display: inline-block;
}
.faq-cat-link {
    display: flex; align-items: center; padding: 10px 14px;
    border-radius: 10px; color: #4a5568; font-weight: 600; font-size: 0.88rem;
    text-decoration: none; transition: all 0.2s; border: 1px solid transparent;
}
.faq-cat-link:hover, .faq-cat-link.active {
    background: rgba(0,153,204,0.08); color: #0099cc;
    border-color: rgba(0,153,204,0.2);
}
.faq-section-icon {
    width: 46px; height: 46px; border-radius: 12px;
    background: linear-gradient(135deg, rgba(0,153,204,0.12), rgba(0,153,204,0.06));
    display: flex; align-items: center; justify-content: center;
    font-size: 1.2rem; color: #0099cc;
}
.faq-item { border: none; border-radius: 12px !important; overflow: hidden; box-shadow: 0 2px 12px rgba(0,0,0,0.05); }
.faq-btn {
    font-weight: 700; font-size: 0.92rem; color: #0b132b;
    background: #fff; padding: 18px 20px;
    border: none; border-radius: 12px;
    box-shadow: none !important;
}
.faq-btn:not(.collapsed) {
    background: #fff; color: #0099cc;
    border-bottom: 1px solid rgba(0,153,204,0.1);
    border-radius: 12px 12px 0 0;
}
.faq-btn::after { filter: invert(40%) sepia(50%) saturate(500%) hue-rotate(168deg); }
.faq-body { background: #fff; padding: 18px 24px; color: #4a5568; font-size: 0.9rem; line-height: 1.75; }
.faq-contact-box {
    background: linear-gradient(135deg, rgba(0,153,204,0.06), rgba(0,153,204,0.02));
    border: 1px solid rgba(0,153,204,0.15); border-radius: 14px; padding: 20px;
}
</style>

<script>
// FAQ Search
const faqSearch = document.getElementById('faqSearch');
const faqSections = document.querySelectorAll('.faq-section');
const faqNoResults = document.getElementById('faqNoResults');

faqSearch.addEventListener('input', function() {
    const term = this.value.toLowerCase().trim();
    let totalVisible = 0;

    faqSections.forEach(section => {
        const items = section.querySelectorAll('.faq-item');
        let sectionVisible = 0;
        items.forEach(item => {
            const q = item.querySelector('.faq-btn').textContent.toLowerCase();
            const a = item.querySelector('.faq-body').textContent.toLowerCase();
            if (!term || q.includes(term) || a.includes(term)) {
                item.style.display = '';
                sectionVisible++;
            } else {
                item.style.display = 'none';
            }
        });
        section.style.display = sectionVisible > 0 ? '' : 'none';
        totalVisible += sectionVisible;
    });

    faqNoResults.classList.toggle('d-none', totalVisible > 0);
});

// Smooth scroll for category nav
document.querySelectorAll('.faq-cat-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelectorAll('.faq-cat-link').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
        const target = document.querySelector(this.getAttribute('href'));
        if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});
</script>

<?php require_once 'includes/footer.php'; ?>
