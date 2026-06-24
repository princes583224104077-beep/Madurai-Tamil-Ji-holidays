<?php
require_once 'includes/db.php';

// Get package by ID or use mock
$pkg_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

// Attempt DB fetch
$package = null;
$db = get_db_connection();
if ($db) {
    try {
        $stmt = $db->prepare("SELECT * FROM packages WHERE id = ?");
        $stmt->execute([$pkg_id]);
        $package = $stmt->fetch();
    } catch (PDOException $e) {}
}

// Fallback to mock
if (!$package) {
    $all = get_packages();
    foreach ($all as $p) {
        if ($p['id'] == $pkg_id) { $package = $p; break; }
    }
    if (!$package) { $package = $all[0]; } // Default first package
}

$page_title = htmlspecialchars($package['name']) . " | Tour Package | Tamil Ji Holidays";
$page_description = "Book " . htmlspecialchars($package['name']) . " - " . htmlspecialchars($package['duration']) . " tour package from Tamil Ji Holidays starting at ₹" . number_format($package['price']) . " per person.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

// Parse itinerary
$itinerary_days = [];
$raw_itinerary = $package['itinerary'];
// Split by "Day" keyword
$pattern = '/Day\s*\d+/i';
preg_match_all($pattern, $raw_itinerary, $matches, PREG_OFFSET_CAPTURE);
if (!empty($matches[0])) {
    for ($i = 0; $i < count($matches[0]); $i++) {
        $start = $matches[0][$i][1] + strlen($matches[0][$i][0]);
        $end = isset($matches[0][$i+1]) ? $matches[0][$i+1][1] : strlen($raw_itinerary);
        $content = trim(substr($raw_itinerary, $start, $end - $start), ': .');
        $itinerary_days[] = [
            'day' => $matches[0][$i][0],
            'detail' => $content
        ];
    }
}
if (empty($itinerary_days)) {
    $itinerary_days[] = ['day' => 'Itinerary', 'detail' => $raw_itinerary];
}

// Similar packages
$similar = get_packages($package['category']);
$similar = array_filter($similar, function($p) use ($pkg_id) { return $p['id'] != $pkg_id; });
$similar = array_slice(array_values($similar), 0, 3);

$inclusions = ['AC Vehicle with Professional Driver', 'Hotel Accommodation (as per plan)', 'Daily Breakfast', 'All Sightseeing Entry Fees', 'Parking & Toll Charges', '24/7 Customer Support'];
$exclusions = ['Air/Train Tickets', 'Lunch & Dinner', 'Personal Shopping', 'Alcohol & Beverages', 'Insurance', 'Tips to Driver & Guide'];
?>

<!-- Package Hero Banner -->
<div class="pkg-detail-hero" style="background: linear-gradient(to right, rgba(5,15,35,0.9), rgba(5,15,35,0.5)), url('<?php echo htmlspecialchars($package['image_url']); ?>') center/cover no-repeat;">
    <div class="container py-5">
        <div class="pkg-detail-hero-content">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php" class="text-warning text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="packages.php" class="text-warning text-decoration-none">Packages</a></li>
                    <li class="breadcrumb-item active text-white-50"><?php echo htmlspecialchars($package['name']); ?></li>
                </ol>
            </nav>
            <span class="pkg-detail-cat-badge"><?php echo htmlspecialchars($package['category']); ?></span>
            <h1 class="text-white fw-bold display-5 mt-3 mb-3"><?php echo htmlspecialchars($package['name']); ?></h1>
            <div class="d-flex flex-wrap gap-3 text-white-75 small">
                <span><i class="fa-regular fa-clock text-warning me-2"></i><?php echo htmlspecialchars($package['duration']); ?></span>
                <span><i class="fa-solid fa-users text-warning me-2"></i>Group & Private Options</span>
                <span><i class="fa-solid fa-star text-warning me-2"></i>4.9/5 Rating</span>
                <span><i class="fa-solid fa-shield-halved text-warning me-2"></i>100% Safe & Verified</span>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Left: Details -->
            <div class="col-lg-8">
                <!-- Highlights Row -->
                <div class="row g-3 mb-5">
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-road text-warning fs-3 mb-2"></i>
                            <div class="fw-bold small text-dark">Distance</div>
                            <div class="text-muted" style="font-size: 0.8rem;">Covered</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-bed text-warning fs-3 mb-2"></i>
                            <div class="fw-bold small text-dark">Hotels</div>
                            <div class="text-muted" style="font-size: 0.8rem;">Included</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-car text-warning fs-3 mb-2"></i>
                            <div class="fw-bold small text-dark">Private Cab</div>
                            <div class="text-muted" style="font-size: 0.8rem;">AC Vehicle</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-camera text-warning fs-3 mb-2"></i>
                            <div class="fw-bold small text-dark">Sightseeing</div>
                            <div class="text-muted" style="font-size: 0.8rem;">All Spots</div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary -->
                <div class="mb-5">
                    <h3 class="fw-bold text-dark mb-4">
                        <i class="fa-solid fa-route text-warning me-2"></i>Day-wise Itinerary
                    </h3>
                    <div class="itinerary-timeline">
                        <?php foreach ($itinerary_days as $didx => $day): ?>
                        <div class="itinerary-item">
                            <div class="itinerary-day-badge"><?php echo htmlspecialchars($day['day']); ?></div>
                            <div class="itinerary-detail">
                                <p class="mb-0 text-secondary"><?php echo htmlspecialchars($day['detail']); ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Inclusions & Exclusions -->
                <div class="row g-4 mb-5">
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm p-4 h-100">
                            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-circle-check text-success me-2"></i>What's Included</h5>
                            <ul class="list-unstyled mb-0">
                                <?php foreach ($inclusions as $inc): ?>
                                <li class="d-flex align-items-center gap-2 mb-2 text-secondary small">
                                    <i class="fa-solid fa-check text-success flex-shrink-0"></i>
                                    <?php echo htmlspecialchars($inc); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm p-4 h-100">
                            <h5 class="fw-bold mb-3 text-dark"><i class="fa-solid fa-circle-xmark text-danger me-2"></i>Not Included</h5>
                            <ul class="list-unstyled mb-0">
                                <?php foreach ($exclusions as $exc): ?>
                                <li class="d-flex align-items-center gap-2 mb-2 text-secondary small">
                                    <i class="fa-solid fa-xmark text-danger flex-shrink-0"></i>
                                    <?php echo htmlspecialchars($exc); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Important Notes -->
                <div class="card border-0 shadow-sm p-4 mb-5" style="border-left: 4px solid #f5a623 !important; border-left-width: 4px !important;">
                    <h5 class="fw-bold mb-3"><i class="fa-solid fa-triangle-exclamation text-warning me-2"></i>Important Notes</h5>
                    <ul class="list-unstyled mb-0 text-secondary small">
                        <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>All prices are per person and based on double occupancy sharing.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Child below 5 years travel free; 5–12 years get 40% discount.</li>
                        <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Prices may vary during peak seasons (December–January, summer holidays).</li>
                        <li class="mb-2"><i class="fa-solid fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Hotel category upgrades available on request.</li>
                        <li class="mb-0"><i class="fa-solid fa-circle text-warning me-2" style="font-size: 0.5rem;"></i>Itinerary subject to change due to weather, traffic, or local conditions.</li>
                    </ul>
                </div>
            </div>

            <!-- Right: Booking Sidebar -->
            <div class="col-lg-4">
                <div class="pkg-booking-sidebar sticky-top" style="top: 90px;">
                    <div class="card border-0 shadow-lg p-4">
                        <div class="text-center mb-4">
                            <div class="text-muted small fw-bold text-uppercase">Starting From</div>
                            <div class="display-5 fw-bold text-dark">₹<?php echo number_format($package['price']); ?></div>
                            <div class="text-muted small">Per Person</div>
                            <div class="d-flex justify-content-center gap-1 mt-2">
                                <?php for ($s = 1; $s <= 5; $s++): ?>
                                <i class="fa-solid fa-star text-warning" style="font-size: 0.85rem;"></i>
                                <?php endfor; ?>
                                <span class="text-muted ms-1 small">(4.9)</span>
                            </div>
                        </div>

                        <form action="enquiry_submit.php" method="POST">
                            <input type="hidden" name="enquiry_package_name" value="<?php echo htmlspecialchars($package['name']); ?>">
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Your Name *</label>
                                <input type="text" class="form-control bg-light border-0" name="enquiry_name" placeholder="Full name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Phone Number *</label>
                                <input type="tel" class="form-control bg-light border-0" name="enquiry_phone" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Email Address *</label>
                                <input type="email" class="form-control bg-light border-0" name="enquiry_email" placeholder="email@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Travel Date</label>
                                <input type="date" class="form-control bg-light border-0" name="enquiry_date" min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold small">Additional Requirements</label>
                                <textarea class="form-control bg-light border-0" rows="3" name="enquiry_message" placeholder="Hotel type, group size, special needs..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning w-100 fw-bold text-uppercase py-3 rounded-pill shadow">
                                <i class="fa-solid fa-paper-plane me-2"></i>Send Enquiry
                            </button>
                        </form>

                        <div class="text-center mt-3">
                            <a href="https://wa.me/919842916996?text=Hi%20Tamil%20Ji%20Holidays!%20I%20am%20interested%20in%20the%20<?php echo urlencode($package['name']); ?>%20package."
                               class="btn btn-success w-100 rounded-pill fw-bold py-2" target="_blank">
                                <i class="fa-brands fa-whatsapp me-2"></i>Chat on WhatsApp
                            </a>
                        </div>

                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex align-items-center gap-2 mb-2 small text-muted">
                                <i class="fa-solid fa-shield-halved text-success"></i>
                                <span>100% Safe & Secure Booking</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2 small text-muted">
                                <i class="fa-solid fa-headset text-primary"></i>
                                <span>24/7 Customer Support</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 small text-muted">
                                <i class="fa-solid fa-rotate-left text-warning"></i>
                                <span>Easy Cancellation Policy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Similar Packages -->
        <?php if (!empty($similar)): ?>
        <div class="mt-5 pt-3">
            <h3 class="fw-bold text-dark mb-4">More <?php echo htmlspecialchars($package['category']); ?> Packages</h3>
            <div class="row g-4">
                <?php foreach ($similar as $sim): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm overflow-hidden card-hover h-100">
                        <div style="height: 180px; overflow: hidden;">
                            <img src="<?php echo htmlspecialchars($sim['image_url']); ?>"
                                 alt="<?php echo htmlspecialchars($sim['name']); ?>"
                                 class="w-100 h-100 object-fit-cover"
                                 onerror="this.src='https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=600&q=80'">
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold text-dark mb-1"><?php echo htmlspecialchars($sim['name']); ?></h6>
                            <span class="text-muted small"><i class="fa-regular fa-clock me-1 text-warning"></i><?php echo htmlspecialchars($sim['duration']); ?></span>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-bold text-dark fs-5">₹<?php echo number_format($sim['price']); ?></span>
                                <a href="package-details.php?id=<?php echo $sim['id']; ?>" class="btn btn-warning btn-sm rounded-pill px-3 fw-bold">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<style>
.pkg-detail-hero {
    min-height: 400px; display: flex; align-items: flex-end;
    padding: 100px 0 50px;
}
.pkg-detail-cat-badge {
    background: rgba(245,166,35,0.25); border: 1px solid rgba(245,166,35,0.5);
    color: #f5a623; font-size: 0.8rem; font-weight: 700;
    padding: 5px 16px; border-radius: 20px; display: inline-block;
}
.pkg-highlight-card {
    background: #fff; border-radius: 14px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);
    transition: all 0.3s;
}
.pkg-highlight-card:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
.itinerary-timeline { position: relative; }
.itinerary-timeline::before {
    content: ''; position: absolute; left: 62px; top: 0; bottom: 0;
    width: 2px; background: linear-gradient(to bottom, #0099cc, rgba(0,153,204,0.1));
}
.itinerary-item {
    display: flex; gap: 20px; align-items: flex-start; margin-bottom: 24px; position: relative;
}
.itinerary-day-badge {
    min-width: 125px; background: linear-gradient(135deg, #0099cc, #0077aa);
    color: #fff; font-size: 0.75rem; font-weight: 800; padding: 6px 12px;
    border-radius: 20px; text-align: center; flex-shrink: 0; z-index: 1;
}
.itinerary-detail {
    background: #fff; border-radius: 12px; padding: 14px 18px;
    flex-grow: 1; box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,0,0,0.04);
}
.card-hover { transition: all 0.3s; }
.card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0,0,0,0.12) !important; }
</style>

<?php require_once 'includes/footer.php'; ?>
