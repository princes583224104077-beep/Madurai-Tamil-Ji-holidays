<?php
require_once 'includes/db.php';

$page_title = "Customer Reviews & Testimonials | Madurai Tamil Ji Holidays";
$page_description = "Read genuine reviews from our happy travellers. Thousands of satisfied customers trust Madurai Tamil Ji Holidays for premium tour packages and vehicle rentals.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

$testimonials = get_testimonials();

// Extended mock reviews
$all_reviews = [
    ['name' => 'Rohan Sharma', 'location' => 'Chennai, Tamil Nadu', 'tour' => 'Munnar & Alleppey Package', 'review' => 'Absolutely incredible service! The Innova Crysta was sparkling clean and the driver was extremely polite and knowledgeable about local spots around Munnar. Highly recommended for families!', 'rating' => 5, 'avatar' => 'RS'],
    ['name' => 'Priya Subramanian', 'location' => 'Bangalore, Karnataka', 'tour' => 'Rameshwaram Pilgrimage', 'review' => 'Booked a 4-day Rameshwaram trip for my parents. Tamil Ji Holidays made it completely hassle-free. The accommodation and local guides were excellent. Very safe for senior citizens!', 'rating' => 5, 'avatar' => 'PS'],
    ['name' => 'Anil Kumar', 'location' => 'Hyderabad, Telangana', 'tour' => 'Kodaikanal 3 Days', 'review' => 'Very reasonable pricing and transparent billing. We rented a Tempo Traveller for our family trip to Kodaikanal. Comfortable seats, great audio system, and the driver knew all the best spots!', 'rating' => 4, 'avatar' => 'AK'],
    ['name' => 'Deepa Menon', 'location' => 'Kochi, Kerala', 'tour' => 'Kerala Honeymoon Special', 'review' => 'We had our honeymoon planned through Tamil Ji Holidays and it was simply magical. The houseboat experience at Alleppey was beyond our expectations. Every detail was perfectly arranged.', 'rating' => 5, 'avatar' => 'DM'],
    ['name' => 'Suresh Venkataraman', 'location' => 'Coimbatore, Tamil Nadu', 'tour' => 'Tirupati Darshan', 'review' => 'Got VIP darshan at Tirupati without any stress or waiting. Tamil Ji Holidays handled all the arrangements including hotel near the temple. Will book again for Kanyakumari next.', 'rating' => 5, 'avatar' => 'SV'],
    ['name' => 'Meera Pillai', 'location' => 'Madurai, Tamil Nadu', 'tour' => 'Ooty Hill Station Tour', 'review' => 'Beautiful experience! The toy train ride arranged by them was a wonderful surprise. Driver Bhai was very friendly and took us to a hidden waterfall not on the regular itinerary!', 'rating' => 4, 'avatar' => 'MP'],
    ['name' => 'Rajesh Nair', 'location' => 'Mumbai, Maharashtra', 'tour' => 'Golden Triangle North India', 'review' => 'Booked the Delhi-Agra-Jaipur package for 6 days. Smooth coordination, great hotels, knowledgeable local guides at each spot. Tamil Ji Holidays is reliable even for North India trips!', 'rating' => 5, 'avatar' => 'RN'],
    ['name' => 'Kavitha Sundaram', 'location' => 'Salem, Tamil Nadu', 'tour' => 'Kanyakumari Day Trip', 'review' => 'Went for a sunrise trip to Kanyakumari with family. The cab arrived 15 minutes early, the driver was courteous, and we reached right in time for the magnificent sunrise. Perfect service!', 'rating' => 5, 'avatar' => 'KS'],
    ['name' => 'Vinod Krishnamurthy', 'location' => 'Trichy, Tamil Nadu', 'tour' => 'Coorg Coffee Estate Tour', 'review' => 'Coorg was breathtaking and Tamil Ji Holidays made it effortless. Their SUV rental was comfortable and the driver helped us navigate the winding mountain roads with complete confidence.', 'rating' => 4, 'avatar' => 'VK'],
];
?>

<!-- Page Banner -->
<section class="page-banner-section">
    <div class="container py-5 text-center" style="position: relative; z-index: 2;">
        <span class="page-banner-tag"><i class="fa-solid fa-star me-2"></i>Real Experiences</span>
        <h1 class="display-4 fw-bold text-white mt-3">What Our Travellers Say</h1>
        <p class="lead text-warning mb-0">Genuine Reviews from 5000+ Happy Customers</p>
        <div class="d-flex justify-content-center gap-4 mt-4">
            <div class="text-center">
                <div class="display-6 fw-bold text-warning">4.9</div>
                <div class="text-white-50 small">Avg. Rating</div>
            </div>
            <div class="text-white opacity-25 fs-2">|</div>
            <div class="text-center">
                <div class="display-6 fw-bold text-warning">5000+</div>
                <div class="text-white-50 small">Happy Travellers</div>
            </div>
            <div class="text-white opacity-25 fs-2">|</div>
            <div class="text-center">
                <div class="display-6 fw-bold text-warning">98%</div>
                <div class="text-white-50 small">Recommend Us</div>
            </div>
        </div>
    </div>
</section>

<!-- Overall Rating Summary -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-4 justify-content-center">
            <div class="col-lg-4 text-center">
                <div class="big-rating-display">
                    <div class="rating-number">4.9</div>
                    <div class="rating-stars">
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star-half-stroke text-warning"></i>
                    </div>
                    <p class="text-muted small mt-2">Based on 5,000+ Reviews</p>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="rating-bars">
                    <?php
                    $bars = [
                        ['label' => '5 Star', 'pct' => 87, 'count' => '4,350'],
                        ['label' => '4 Star', 'pct' => 10, 'count' => '500'],
                        ['label' => '3 Star', 'pct' => 2,  'count' => '100'],
                        ['label' => '2 Star', 'pct' => 1,  'count' => '50'],
                    ];
                    foreach ($bars as $bar): ?>
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <span class="text-dark fw-bold small" style="min-width: 50px;"><?php echo $bar['label']; ?></span>
                        <div class="progress flex-grow-1" style="height: 10px; border-radius: 5px;">
                            <div class="progress-bar bg-warning" style="width: <?php echo $bar['pct']; ?>%;"></div>
                        </div>
                        <span class="text-muted small" style="min-width: 45px;"><?php echo $bar['count']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="p-4 bg-light rounded-4">
                    <i class="fa-brands fa-google text-danger fs-2 mb-2"></i>
                    <div class="fw-bold text-dark">Google Reviews</div>
                    <div class="text-warning fw-bold">★ 4.8 / 5</div>
                    <div class="text-muted small">2,300+ Reviews</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review Cards Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-tag">Customer Stories</span>
            <h2 class="section-title mt-2">Read Their Experiences</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($all_reviews as $idx => $review): ?>
            <div class="col-lg-4 col-md-6 fade-up" style="animation-delay: <?php echo ($idx * 0.08); ?>s;">
                <div class="review-card h-100">
                    <div class="review-card-top">
                        <div class="reviewer-avatar"><?php echo htmlspecialchars($review['avatar']); ?></div>
                        <div>
                            <div class="fw-bold text-dark reviewer-name"><?php echo htmlspecialchars($review['name']); ?></div>
                            <div class="text-muted small"><i class="fa-solid fa-location-dot me-1 text-warning"></i><?php echo htmlspecialchars($review['location']); ?></div>
                        </div>
                    </div>
                    <div class="review-stars mb-2">
                        <?php for ($s = 1; $s <= 5; $s++): ?>
                        <i class="fa-solid fa-star <?php echo ($s <= $review['rating']) ? 'text-warning' : 'text-muted opacity-25'; ?>"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="review-text">"<?php echo htmlspecialchars($review['review']); ?>"</p>
                    <div class="review-package-tag">
                        <i class="fa-solid fa-route me-1"></i><?php echo htmlspecialchars($review['tour']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Write Review CTA -->
<section class="py-5 bg-dark text-white text-center">
    <div class="container">
        <div class="display-5 mb-3">⭐</div>
        <h3 class="fw-bold mb-2">Travelled With Us Recently?</h3>
        <p class="text-white-50 mb-4">Share your experience to help other travellers make the right choice.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="https://g.page/r/TamilJiHolidays/review" target="_blank" class="btn btn-warning rounded-pill fw-bold px-4 py-2">
                <i class="fa-brands fa-google me-2"></i>Write Google Review
            </a>
            <a href="contact.php" class="btn btn-outline-light rounded-pill fw-bold px-4 py-2">
                <i class="fa-solid fa-envelope me-2"></i>Send Us Feedback
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
.big-rating-display .rating-number {
    font-size: 5rem; font-weight: 900; color: #0b132b; line-height: 1;
}
.review-card {
    background: #fff; border-radius: 18px; padding: 28px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.07); border: 1px solid rgba(0,0,0,0.04);
    transition: all 0.3s ease; display: flex; flex-direction: column;
}
.review-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(0,0,0,0.12); }
.review-card-top { display: flex; align-items: center; gap: 14px; margin-bottom: 14px; }
.reviewer-avatar {
    width: 52px; height: 52px; border-radius: 50%; flex-shrink: 0;
    background: linear-gradient(135deg, #0099cc, #0077aa);
    color: #fff; font-weight: 800; font-size: 1.1rem;
    display: flex; align-items: center; justify-content: center;
}
.reviewer-name { font-size: 0.95rem; }
.review-stars { font-size: 0.9rem; margin-bottom: 8px; }
.review-text {
    color: #6c757d; font-size: 0.88rem; line-height: 1.7;
    font-style: italic; flex-grow: 1; margin-bottom: 14px;
}
.review-package-tag {
    background: rgba(0,153,204,0.08); color: #0077aa;
    font-size: 0.75rem; font-weight: 700; padding: 5px 12px;
    border-radius: 20px; border: 1px solid rgba(0,153,204,0.2);
    display: inline-block;
}
.section-tag {
    background: rgba(245,166,35,0.15); color: #d4891a;
    font-weight: 800; font-size: 0.78rem; text-transform: uppercase;
    letter-spacing: 2px; padding: 6px 18px; border-radius: 20px; display: inline-block;
}
.section-title { font-size: 2.2rem; font-weight: 900; color: #0b132b; }
</style>

<?php require_once 'includes/footer.php'; ?>
