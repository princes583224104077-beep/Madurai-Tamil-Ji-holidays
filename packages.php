<?php
require_once 'includes/db.php';

$selected_category = isset($_GET['category']) ? trim($_GET['category']) : '';

$page_title = "Tour Packages & Custom Itineraries | Madurai Tamil Ji Holidays";
if (!empty($selected_category)) {
    $page_title = htmlspecialchars($selected_category) . " Packages | Tamil Ji Holidays";
}
$page_description = "Browse customized travel plans like Kerala Houseboat tours, Rameshwaram Pilgrimages, Honeymoon escapes, Ooty & Kodaikanal hill station packages.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

// Fetch filtered or all packages
if (!empty($selected_category)) {
    $packages = get_packages($selected_category);
} else {
    $packages = get_packages();
}

$categories = [
    'Kerala Tours',
    'Kodaikanal Tours',
    'Ooty Tours',
    'Rameshwaram Tours',
    'Tirupati Tours',
    'North India Tours',
    'Honeymoon Tours'
];
?>

<!-- Banner Header -->
<section class="py-5 text-center text-white" style="background: var(--gradient-primary); position: relative;">
    <div class="container py-4">
        <h1 class="display-4 fw-bold">Tour Packages</h1>
        <p class="lead text-warning mb-0">Handcrafted Travel Plans Tailored For Your Memories</p>
    </div>
</section>

<!-- Category Filtering Section -->
<section class="py-4 bg-white border-bottom shadow-sm">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-2">
            <a href="packages.php" class="btn btn-sm rounded-pill px-3 fw-bold <?php echo empty($selected_category) ? 'btn-warning' : 'btn-outline-dark'; ?>">
                All Packages
            </a>
            <?php foreach ($categories as $cat): ?>
                <a href="packages.php?category=<?php echo urlencode($cat); ?>" class="btn btn-sm rounded-pill px-3 fw-bold <?php echo ($selected_category === $cat) ? 'btn-warning' : 'btn-outline-dark'; ?>">
                    <?php echo htmlspecialchars($cat); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Packages Display Section -->
<section class="py-5 bg-light">
    <div class="container">
        <?php if (empty($packages)): ?>
        <div class="text-center py-5">
            <div class="fs-1 text-muted mb-3"><i class="fa-solid fa-map-location"></i></div>
            <h4 class="fw-bold text-dark">No Packages Found</h4>
            <p class="text-secondary small">We currently do not have active online plans in this category. Connect on WhatsApp to get a custom quotation!</p>
            <a href="https://wa.me/919842916996" class="btn btn-warning rounded-pill px-4 fw-bold mt-2" target="_blank">Chat on WhatsApp</a>
        </div>
        <?php else: ?>
        <div class="row g-4">
            <?php foreach ($packages as $package): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card tour-card card-hover h-100 border-0 shadow-sm bg-white">
                    <div class="tour-card-img-wrap">
                        <span class="tour-category-badge"><?php echo htmlspecialchars($package['category']); ?></span>
                        <span class="tour-duration-badge"><i class="fa-regular fa-clock me-1"></i><?php echo htmlspecialchars($package['duration']); ?></span>
                        <img src="<?php echo htmlspecialchars($package['image_url']); ?>" alt="<?php echo htmlspecialchars($package['name']); ?>" onerror="this.src='https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="card-title fw-bold text-dark mb-2"><?php echo htmlspecialchars($package['name']); ?></h4>
                        
                        <hr class="my-2 border-light">
                        
                        <p class="text-secondary small fw-bold mb-1"><i class="fa-solid fa-route text-warning me-2"></i>Proposed Itinerary:</p>
                        <p class="card-text text-secondary small flex-grow-1 mb-4" style="line-height: 1.6;">
                            <?php echo nl2br(htmlspecialchars($package['itinerary'])); ?>
                        </p>
                        
                        <div class="d-flex justify-content-between align-items-center mt-auto border-top pt-3">
                            <div>
                                <span class="d-block text-secondary small" style="font-size: 0.75rem;">Price per Person</span>
                                <span class="fs-4 fw-bold text-dark">₹<?php echo number_format($package['price']); ?></span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="package-details.php?id=<?php echo $package['id']; ?>" class="btn btn-outline-dark px-3 rounded-pill fw-bold btn-sm">
                                    <i class="fa-solid fa-eye me-1"></i>Details
                                </a>
                                <button class="btn btn-warning px-3 rounded-pill fw-bold text-uppercase py-2 btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-package-name="<?php echo htmlspecialchars($package['name']); ?>">
                                    <i class="fa-solid fa-envelope me-2"></i>Enquire
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Customization Banner -->
<section class="py-5 text-white" style="background: var(--gradient-primary); position: relative; overflow: hidden;">
    <div class="container text-center py-3" style="position: relative; z-index: 2;">
        <h3 class="fw-bold mb-2">Want a Custom Tailor-Made Itinerary?</h3>
        <p class="text-light-50 max-width-600 mx-auto mb-4">Tell us your budget, preferred hotels, number of travelers, and dates, and our custom travel designer will create a unique itinerary specifically for you.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="contact.php" class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-uppercase">Plan My Trip Now</a>
            <a href="https://wa.me/919842916996?text=Hi,%20I%20want%20to%20customize%20a%20tour%20package." class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" target="_blank"><i class="fa-brands fa-whatsapp me-2"></i>Discuss on WhatsApp</a>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
