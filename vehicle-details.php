<?php
require_once 'includes/db.php';

// Get vehicle by ID
$veh_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$vehicle = null;
$db = get_db_connection();
if ($db) {
    try {
        $stmt = $db->prepare("SELECT * FROM vehicles WHERE id = ?");
        $stmt->execute([$veh_id]);
        $vehicle = $stmt->fetch();
    } catch (PDOException $e) {}
}

// Fallback mock
if (!$vehicle) {
    $all = get_vehicles();
    foreach ($all as $v) {
        if ($v['id'] == $veh_id) { $vehicle = $v; break; }
    }
    if (!$vehicle) { $vehicle = $all[0]; }
}

$page_title = htmlspecialchars($vehicle['name']) . " | Vehicle Details | Tamil Ji Holidays";
$page_description = "Rent " . htmlspecialchars($vehicle['name']) . " in Madurai. " . htmlspecialchars($vehicle['capacity']) . "-seater AC vehicle at " . htmlspecialchars($vehicle['tariff']) . " with professional driver.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

$features_arr = array_filter(explode(',', $vehicle['features']), fn($f) => trim($f) !== '');

$all_vehicles = get_vehicles();
$other_vehicles = array_filter($all_vehicles, fn($v) => $v['id'] != $veh_id);

// Tariff breakdown
$tariff_table = [
    ['type' => 'Local City Tour (8 hrs/80 km)', 'rate' => 'Starting ₹999'],
    ['type' => 'Airport/Railway Transfer', 'rate' => 'Starting ₹599'],
    ['type' => 'Outstation One Way', 'rate' => $vehicle['tariff']],
    ['type' => 'Outstation Round Trip', 'rate' => $vehicle['tariff'] . ' (min 250km/day)'],
    ['type' => 'Full Day Hire (12 hrs)', 'rate' => 'Contact for Quote'],
];
?>

<!-- Vehicle Hero -->
<div class="pkg-detail-hero" style="background: linear-gradient(to right, rgba(5,15,35,0.92), rgba(5,15,35,0.55)), url('<?php echo htmlspecialchars($vehicle['image_url']); ?>') center/cover no-repeat; min-height: 350px;">
    <div class="container py-5">
        <nav aria-label="breadcrumb" class="mb-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php" class="text-warning text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="vehicles.php" class="text-warning text-decoration-none">Vehicles</a></li>
                <li class="breadcrumb-item active text-white-50"><?php echo htmlspecialchars($vehicle['name']); ?></li>
            </ol>
        </nav>
        <span class="pkg-detail-cat-badge"><?php echo htmlspecialchars($vehicle['type']); ?></span>
        <h1 class="text-white fw-bold display-5 mt-3 mb-3"><?php echo htmlspecialchars($vehicle['name']); ?></h1>
        <div class="d-flex flex-wrap gap-3 text-white-50 small">
            <span><i class="fa-solid fa-users text-warning me-2"></i><?php echo $vehicle['capacity']; ?> Seats</span>
            <span><i class="fa-solid fa-tag text-warning me-2"></i><?php echo htmlspecialchars($vehicle['tariff']); ?></span>
            <span><i class="fa-solid fa-snowflake text-warning me-2"></i>Full Air Conditioned</span>
            <span><i class="fa-solid fa-user-tie text-warning me-2"></i>Professional Driver</span>
        </div>
    </div>
</div>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <!-- Left Details -->
            <div class="col-lg-8">
                <!-- Stats Row -->
                <div class="row g-3 mb-5">
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-users text-warning fs-3 mb-2"></i>
                            <div class="fw-bold text-dark"><?php echo $vehicle['capacity']; ?> Seats</div>
                            <div class="text-muted" style="font-size: 0.8rem;">Passenger Capacity</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-snowflake text-warning fs-3 mb-2"></i>
                            <div class="fw-bold text-dark">Full AC</div>
                            <div class="text-muted" style="font-size: 0.8rem;">Climate Controlled</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-route text-warning fs-3 mb-2"></i>
                            <div class="fw-bold text-dark">Any Route</div>
                            <div class="text-muted" style="font-size: 0.8rem;">Outstation Ready</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pkg-highlight-card text-center p-3">
                            <i class="fa-solid fa-shield-halved text-warning fs-3 mb-2"></i>
                            <div class="fw-bold text-dark">Insured</div>
                            <div class="text-muted" style="font-size: 0.8rem;">Full Coverage</div>
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="card border-0 shadow-sm p-4 mb-4">
                    <h4 class="fw-bold text-dark mb-3">
                        <i class="fa-solid fa-star text-warning me-2"></i>Vehicle Features
                    </h4>
                    <div class="row g-2">
                        <?php foreach ($features_arr as $feat): ?>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2 p-2 bg-light rounded-3">
                                <i class="fa-solid fa-circle-check text-success flex-shrink-0"></i>
                                <span class="small fw-semibold text-dark"><?php echo htmlspecialchars(trim($feat)); ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Tariff Table -->
                <div class="card border-0 shadow-sm p-4 mb-4">
                    <h4 class="fw-bold text-dark mb-3">
                        <i class="fa-solid fa-indian-rupee-sign text-warning me-2"></i>Tariff Overview
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th class="fw-bold text-dark small">Hire Type</th>
                                    <th class="fw-bold text-dark small">Approximate Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tariff_table as $row): ?>
                                <tr>
                                    <td class="small text-secondary"><?php echo htmlspecialchars($row['type']); ?></td>
                                    <td class="fw-bold text-dark small"><?php echo htmlspecialchars($row['rate']); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-muted small mb-0 mt-2">
                        <i class="fa-solid fa-triangle-exclamation text-warning me-1"></i>
                        Rates are indicative. Final fare depends on route, duration, and season. Get an exact quote via WhatsApp.
                    </p>
                </div>

                <!-- Rental Guidelines -->
                <div class="card border-0 shadow-sm p-4 mb-4">
                    <h4 class="fw-bold text-dark mb-3">
                        <i class="fa-solid fa-clipboard-list text-warning me-2"></i>Rental Guidelines
                    </h4>
                    <div class="row g-3 text-secondary small">
                        <?php
                        $guidelines = [
                            ['icon' => 'fa-road', 'title' => 'Minimum KM / Day', 'desc' => 'Outstation trips have a minimum 250–300 km/day billing regardless of actual distance.'],
                            ['icon' => 'fa-file-invoice-dollar', 'title' => 'Permit & State Tax', 'desc' => 'Cross-state permits (e.g., Tamil Nadu to Kerala) are charged at actuals.'],
                            ['icon' => 'fa-user-tie', 'title' => 'Driver Allowance', 'desc' => 'Overnight trips include a nominal driver beta of ₹250–₹400/night.'],
                            ['icon' => 'fa-clock-rotate-left', 'title' => 'Flexible Timings', 'desc' => 'Schedule changes accepted with 24-hour prior notice at no extra charge.'],
                        ];
                        foreach ($guidelines as $g): ?>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3">
                                <div class="mt-1 text-warning"><i class="fa-solid <?php echo $g['icon']; ?> fs-5"></i></div>
                                <div>
                                    <div class="fw-bold text-dark mb-1"><?php echo $g['title']; ?></div>
                                    <div><?php echo $g['desc']; ?></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar: Book Vehicle -->
            <div class="col-lg-4">
                <div class="pkg-booking-sidebar sticky-top" style="top: 90px;">
                    <div class="card border-0 shadow-lg p-4">
                        <div class="text-center mb-4">
                            <div class="text-muted small fw-bold text-uppercase">Rental Rate</div>
                            <div class="display-6 fw-bold text-dark mt-1"><?php echo htmlspecialchars($vehicle['tariff']); ?></div>
                            <div class="text-muted small">Per Kilometer (Outstation)</div>
                        </div>

                        <form action="book_submit.php" method="POST">
                            <input type="hidden" name="booking_destination" value="<?php echo htmlspecialchars($vehicle['name']); ?>">
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Your Name *</label>
                                <input type="text" class="form-control bg-light border-0" name="booking_name" placeholder="Full name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Phone Number *</label>
                                <input type="tel" class="form-control bg-light border-0" name="booking_phone" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold small">Travel Date *</label>
                                <input type="date" class="form-control bg-light border-0" name="booking_date" min="<?php echo date('Y-m-d'); ?>" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold small">No. of Passengers *</label>
                                <input type="number" class="form-control bg-light border-0" name="booking_passengers" min="1" max="<?php echo $vehicle['capacity']; ?>" placeholder="Max <?php echo $vehicle['capacity']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-warning w-100 fw-bold text-uppercase py-3 rounded-pill shadow">
                                <i class="fa-solid fa-calendar-check me-2"></i>Book This Vehicle
                            </button>
                        </form>

                        <a href="https://wa.me/919842916996?text=Hi!%20I%20want%20to%20rent%20<?php echo urlencode($vehicle['name']); ?>%20for%20my%20trip."
                           class="btn btn-success w-100 rounded-pill fw-bold py-2 mt-3" target="_blank">
                            <i class="fa-brands fa-whatsapp me-2"></i>Quick WhatsApp Quote
                        </a>

                        <div class="mt-4 pt-3 border-top">
                            <div class="d-flex align-items-center gap-2 mb-2 small text-muted">
                                <i class="fa-solid fa-shield-halved text-success"></i>
                                <span>Fully Insured Vehicle</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2 small text-muted">
                                <i class="fa-solid fa-user-tie text-primary"></i>
                                <span>Professional Driver Included</span>
                            </div>
                            <div class="d-flex align-items-center gap-2 small text-muted">
                                <i class="fa-solid fa-headset text-warning"></i>
                                <span>24/7 Trip Support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Vehicles -->
        <div class="mt-5 pt-3">
            <h3 class="fw-bold text-dark mb-4">Explore Other Vehicles</h3>
            <div class="row g-4">
                <?php foreach (array_slice(array_values($other_vehicles), 0, 3) as $ov): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm overflow-hidden card-hover h-100">
                        <div style="height: 180px; overflow: hidden;">
                            <img src="<?php echo htmlspecialchars($ov['image_url']); ?>"
                                 alt="<?php echo htmlspecialchars($ov['name']); ?>"
                                 class="w-100 h-100 object-fit-cover"
                                 onerror="this.src='https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=600&q=80'">
                        </div>
                        <div class="card-body p-3">
                            <span class="badge bg-dark text-warning mb-2 small"><?php echo htmlspecialchars($ov['type']); ?></span>
                            <h6 class="fw-bold text-dark mb-1"><?php echo htmlspecialchars($ov['name']); ?></h6>
                            <span class="text-muted small"><i class="fa-solid fa-users me-1 text-warning"></i><?php echo $ov['capacity']; ?> Seats | <?php echo htmlspecialchars($ov['tariff']); ?></span>
                            <div class="mt-3">
                                <a href="vehicle-details.php?id=<?php echo $ov['id']; ?>" class="btn btn-warning btn-sm rounded-pill px-3 fw-bold w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
.pkg-detail-hero {
    min-height: 350px; display: flex; align-items: flex-end; padding: 100px 0 50px;
}
.pkg-detail-cat-badge {
    background: rgba(245,166,35,0.25); border: 1px solid rgba(245,166,35,0.5);
    color: #f5a623; font-size: 0.8rem; font-weight: 700;
    padding: 5px 16px; border-radius: 20px; display: inline-block;
}
.pkg-highlight-card {
    background: #fff; border-radius: 14px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.06);
    border: 1px solid rgba(0,0,0,0.04); transition: all 0.3s;
}
.pkg-highlight-card:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
.card-hover { transition: all 0.3s; }
.card-hover:hover { transform: translateY(-5px); box-shadow: 0 15px 35px rgba(0,0,0,0.12) !important; }
</style>

<?php require_once 'includes/footer.php'; ?>
