<?php
require_once 'includes/db.php';

$page_title = "Vehicle Rentals & Fleet Tariff | Madurai Tamil Ji Holidays";
$page_description = "Rent luxury Sedans, SUVs, Innova Crysta, Tempo Travellers, and large buses in Madurai. Check transparent per-km tariffs and seat capacities.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

$vehicles = get_vehicles();
?>

<!-- Banner Header -->
<section class="py-5 text-center text-white" style="background: var(--gradient-primary); position: relative;">
    <div class="container py-4">
        <h1 class="display-4 fw-bold">Vehicle Rentals Fleet</h1>
        <p class="lead text-warning mb-0">Premium Cars, Executive MUVs & Touring Coaches</p>
    </div>
</section>

<!-- Fleet Grid Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <?php foreach ($vehicles as $vehicle): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card card-hover shadow-sm border-0 h-100 overflow-hidden bg-white">
                    <div style="height: 200px; overflow: hidden; position: relative;">
                        <!-- Type Badge -->
                        <span class="badge bg-dark text-warning position-absolute top-3 start-3 px-3 py-2 fw-bold" style="font-size: 0.75rem; border-radius: 4px; z-index: 2; top: 15px; left: 15px;">
                            <?php echo htmlspecialchars($vehicle['type']); ?>
                        </span>
                        <img src="<?php echo htmlspecialchars($vehicle['image_url']); ?>" alt="<?php echo htmlspecialchars($vehicle['name']); ?>" class="w-100 h-100 object-fit-cover" onerror="this.src='https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="fw-bold mb-2 text-dark"><?php echo htmlspecialchars($vehicle['name']); ?></h4>
                        
                        <div class="d-flex gap-4 mb-3 text-secondary border-bottom pb-2">
                            <span class="small fw-semibold"><i class="fa-solid fa-users text-warning me-2"></i><?php echo htmlspecialchars($vehicle['capacity']); ?> Seats</span>
                            <span class="small fw-semibold"><i class="fa-solid fa-tag text-warning me-2"></i><?php echo htmlspecialchars($vehicle['tariff']); ?></span>
                        </div>
                        
                        <p class="text-secondary small fw-bold mb-2"><i class="fa-solid fa-star text-warning me-2"></i>Features Included:</p>
                        <ul class="list-unstyled flex-grow-1 mb-4">
                            <?php 
                            $features_arr = explode(',', $vehicle['features']);
                            foreach ($features_arr as $feat): 
                                if (trim($feat) === '') continue;
                            ?>
                                <li class="small text-secondary mb-1 d-flex align-items-center">
                                    <i class="fa-solid fa-circle-check text-success me-2" style="font-size: 0.7rem;"></i>
                                    <span><?php echo htmlspecialchars(trim($feat)); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <div class="mt-auto d-flex gap-2">
                            <a href="vehicle-details.php?id=<?php echo $vehicle['id']; ?>" class="btn btn-outline-dark flex-grow-1 fw-bold text-uppercase py-2 rounded-pill">
                                <i class="fa-solid fa-eye me-2"></i>Details
                            </a>
                            <button class="btn btn-warning flex-grow-1 fw-bold text-uppercase py-2 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#bookingModal" data-destination="<?php echo htmlspecialchars($vehicle['name']); ?>">
                                <i class="fa-solid fa-calendar-check me-2"></i>Book
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ section for renting -->
<section class="py-5">
    <div class="container" style="max-width: 800px;">
        <div class="text-center mb-5">
            <span class="text-warning text-uppercase fw-bold tracking-wider fs-6">Important Rules</span>
            <h2 class="fw-bold mt-1">Rental Guidelines</h2>
            <div class="mx-auto bg-warning mt-2" style="width: 70px; height: 3px;"></div>
        </div>
        
        <div class="row g-4 text-secondary">
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <span class="fs-4 text-warning"><i class="fa-solid fa-road"></i></span>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Minimum Daily Kilometers</h5>
                        <p class="small">Outstation travel assumes a default minimum billing of 250 - 300 kms per calendar day depending on the vehicle capacity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <span class="fs-4 text-warning"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">State Permits & Taxes</h5>
                        <p class="small">If you are crossing borders (e.g. Tamil Nadu to Kerala or Karnataka), state tourist tax permits will be charged at actual values.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <span class="fs-4 text-warning"><i class="fa-solid fa-user-tie"></i></span>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Driver Beta / Allowance</h5>
                        <p class="small">A nominal driver allowance is applicable for overnight trips, covering meals and accommodation support.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex align-items-start gap-3">
                    <span class="fs-4 text-warning"><i class="fa-solid fa-clock-rotate-left"></i></span>
                    <div>
                        <h5 class="fw-bold text-dark mb-1">Flexible Schedule Adjusts</h5>
                        <p class="small">Feel free to change routing or travel timings by letting us know 24 hours prior. We try to be as accommodating as possible!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
