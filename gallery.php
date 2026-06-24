<?php
require_once 'includes/db.php';

$page_title = "Photo Gallery | Madurai Tamil Ji Holidays";
$page_description = "Browse stunning photos of our tour destinations including Kerala, Kodaikanal, Ooty, Rameshwaram, Munnar, Alleppey and more - captured by our happy travellers.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

$gallery_photos = [
    // Kerala
    ['src' => 'https://images.unsplash.com/photo-1593693397690-362cb9666fc2?auto=format&fit=crop&w=700&q=80', 'label' => 'Munnar Tea Gardens', 'cat' => 'Kerala'],
    ['src' => 'https://images.unsplash.com/photo-1616669944447-d17b7e8b6e23?auto=format&fit=crop&w=700&q=80', 'label' => 'Alleppey Houseboat', 'cat' => 'Kerala'],
    ['src' => 'https://images.unsplash.com/photo-1585123334904-845d60e97b29?auto=format&fit=crop&w=700&q=80', 'label' => 'Kerala Backwaters', 'cat' => 'Kerala'],
    // Ooty
    ['src' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=700&q=80', 'label' => 'Ooty Green Hills', 'cat' => 'Ooty'],
    ['src' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?auto=format&fit=crop&w=700&q=80', 'label' => 'Doddabetta Peak', 'cat' => 'Ooty'],
    // Kodaikanal
    ['src' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=700&q=80', 'label' => 'Kodaikanal Lake View', 'cat' => 'Kodaikanal'],
    ['src' => 'https://images.unsplash.com/photo-1566552881560-0be862a7c445?auto=format&fit=crop&w=700&q=80', 'label' => 'Pine Forest Walk', 'cat' => 'Kodaikanal'],
    // Rameshwaram
    ['src' => 'https://images.unsplash.com/photo-1604537466608-109fa2f16c3b?auto=format&fit=crop&w=700&q=80', 'label' => 'Rameshwaram Temple', 'cat' => 'Rameshwaram'],
    ['src' => 'https://images.unsplash.com/photo-1567157577867-05ccb1388e66?auto=format&fit=crop&w=700&q=80', 'label' => 'Pamban Bridge Sunset', 'cat' => 'Rameshwaram'],
    // Vehicles
    ['src' => 'https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=700&q=80', 'label' => 'Innova Crysta Fleet', 'cat' => 'Fleet'],
    ['src' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=700&q=80', 'label' => 'Tempo Traveller', 'cat' => 'Fleet'],
    // Tirupati
    ['src' => 'https://images.unsplash.com/photo-1608958415714-38600d81b374?auto=format&fit=crop&w=700&q=80', 'label' => 'Tirupati Tirumala', 'cat' => 'Tirupati'],
    // Madurai
    ['src' => 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?auto=format&fit=crop&w=700&q=80', 'label' => 'Meenakshi Temple', 'cat' => 'Madurai'],
    ['src' => 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?auto=format&fit=crop&w=700&q=80', 'label' => 'Madurai City Lights', 'cat' => 'Madurai'],
    // Kanyakumari
    ['src' => 'https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=700&q=80', 'label' => 'Kanyakumari Sunrise', 'cat' => 'Kanyakumari'],
    // Honeymoon
    ['src' => 'https://images.unsplash.com/photo-1530137782405-3a3f4e0cf3e4?auto=format&fit=crop&w=700&q=80', 'label' => 'Romantic Getaway', 'cat' => 'Honeymoon'],
    ['src' => 'https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=700&q=80', 'label' => 'Sunset Cruise', 'cat' => 'Honeymoon'],
    // North India
    ['src' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=700&q=80', 'label' => 'Taj Mahal Agra', 'cat' => 'North India'],
    ['src' => 'https://images.unsplash.com/photo-1609920658906-8223bd289001?auto=format&fit=crop&w=700&q=80', 'label' => 'Jaipur Amber Fort', 'cat' => 'North India'],
];

$categories = ['All', 'Kerala', 'Ooty', 'Kodaikanal', 'Rameshwaram', 'Madurai', 'Tirupati', 'Kanyakumari', 'Honeymoon', 'North India', 'Fleet'];
?>

<!-- Banner Header -->
<section class="page-banner-section">
    <div class="container py-5 text-center">
        <span class="page-banner-tag"><i class="fa-solid fa-images me-2"></i>Visual Journey</span>
        <h1 class="display-4 fw-bold text-white mt-3">Photo Gallery</h1>
        <p class="lead text-warning mb-0">Moments Captured, Memories Forever</p>
    </div>
</section>

<!-- Filter Tabs -->
<section class="py-4 bg-white shadow-sm sticky-top" style="top: 72px; z-index: 100;">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-2" id="galleryFilters">
            <?php foreach ($categories as $cat): ?>
            <button class="btn btn-sm rounded-pill px-3 fw-bold gallery-filter-btn <?php echo ($cat === 'All') ? 'btn-warning' : 'btn-outline-secondary'; ?>"
                    data-filter="<?php echo $cat; ?>">
                <?php echo htmlspecialchars($cat); ?>
            </button>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-3" id="galleryGrid">
            <?php foreach ($gallery_photos as $idx => $photo): ?>
            <div class="col-lg-4 col-md-6 gallery-item" data-category="<?php echo htmlspecialchars($photo['cat']); ?>">
                <div class="gallery-card" data-bs-toggle="modal" data-bs-target="#lightboxModal"
                     data-img="<?php echo htmlspecialchars($photo['src']); ?>"
                     data-label="<?php echo htmlspecialchars($photo['label']); ?>"
                     data-cat="<?php echo htmlspecialchars($photo['cat']); ?>">
                    <img src="<?php echo htmlspecialchars($photo['src']); ?>"
                         alt="<?php echo htmlspecialchars($photo['label']); ?>"
                         loading="lazy"
                         onerror="this.src='https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=700&q=80'">
                    <div class="gallery-card-overlay">
                        <div class="gallery-card-info">
                            <span class="gallery-cat-badge"><?php echo htmlspecialchars($photo['cat']); ?></span>
                            <h5 class="text-white fw-bold mb-0 mt-2"><?php echo htmlspecialchars($photo['label']); ?></h5>
                        </div>
                        <div class="gallery-zoom-icon">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Empty State -->
        <div id="galleryEmpty" class="text-center py-5 d-none">
            <div class="fs-1 text-muted mb-3"><i class="fa-regular fa-images"></i></div>
            <h5 class="fw-bold text-muted">No photos in this category yet</h5>
            <p class="text-secondary small">Check back soon for more travel snapshots!</p>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content bg-dark border-0 shadow-lg">
            <div class="modal-header border-0 p-2 px-3">
                <div>
                    <span id="lightboxCat" class="badge bg-warning text-dark small fw-bold"></span>
                    <h6 id="lightboxLabel" class="text-white fw-bold mb-0 ms-2 d-inline"></h6>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-2 text-center">
                <img id="lightboxImg" src="" alt="" class="img-fluid rounded" style="max-height: 75vh; object-fit: contain;">
            </div>
            <div class="modal-footer border-0 justify-content-center pb-3">
                <a href="packages.php" class="btn btn-warning rounded-pill fw-bold px-4">
                    <i class="fa-solid fa-route me-2"></i>Book This Destination
                </a>
            </div>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<section class="py-5 bg-dark text-center text-white">
    <div class="container">
        <h3 class="fw-bold mb-2">Ready to Create Your Own Memories?</h3>
        <p class="text-white-50 mb-4">Join hundreds of happy travellers who trusted us for their dream holidays.</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="packages.php" class="btn btn-warning rounded-pill px-4 py-2 fw-bold text-uppercase">
                <i class="fa-solid fa-map-location-dot me-2"></i>Browse Packages
            </a>
            <a href="https://wa.me/919842916996?text=Hi%20Tamil%20Ji%20Holidays!%20I%20saw%20your%20gallery%20and%20want%20to%20plan%20a%20trip." class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold text-uppercase" target="_blank">
                <i class="fa-brands fa-whatsapp me-2"></i>WhatsApp Us
            </a>
        </div>
    </div>
</section>

<style>
.gallery-card {
    position: relative;
    height: 260px;
    overflow: hidden;
    border-radius: 16px;
    cursor: pointer;
    box-shadow: 0 8px 25px rgba(0,0,0,0.12);
    transition: all 0.3s ease;
}
.gallery-card:hover { transform: translateY(-6px); box-shadow: 0 18px 45px rgba(0,0,0,0.2); }
.gallery-card img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform 0.6s ease;
}
.gallery-card:hover img { transform: scale(1.1); }
.gallery-card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(5,15,35,0.85) 0%, rgba(5,15,35,0.1) 60%);
    display: flex; align-items: flex-end; justify-content: space-between;
    padding: 20px; opacity: 0; transition: opacity 0.35s ease;
}
.gallery-card:hover .gallery-card-overlay { opacity: 1; }
.gallery-cat-badge {
    background: var(--gold, #f5a623); color: #000;
    font-size: 0.7rem; font-weight: 800; padding: 3px 10px; border-radius: 20px; text-transform: uppercase;
}
.gallery-zoom-icon {
    font-size: 1.5rem; color: #fff;
    background: rgba(255,255,255,0.15);
    width: 46px; height: 46px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    backdrop-filter: blur(4px); align-self: flex-start;
    margin-top: auto;
}
.page-banner-section {
    background: linear-gradient(135deg, #0b132b 0%, #0077aa 60%, #0099cc 100%);
    padding: 80px 0 60px;
    position: relative; overflow: hidden;
}
.page-banner-section::before {
    content: '';
    position: absolute; inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23fff' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='20'/%3E%3C/g%3E%3C/svg%3E");
}
.page-banner-tag {
    background: rgba(245,166,35,0.2); border: 1px solid rgba(245,166,35,0.4);
    color: #f5a623; font-size: 0.82rem; font-weight: 700;
    padding: 6px 18px; border-radius: 20px; display: inline-block; letter-spacing: 0.5px;
}
.gallery-item { transition: opacity 0.3s ease, transform 0.3s ease; }
.gallery-item.hidden { opacity: 0; pointer-events: none; display: none; }
</style>

<script>
// Gallery Filter Logic
const filterBtns = document.querySelectorAll('.gallery-filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');
const galleryEmpty = document.getElementById('galleryEmpty');

filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('btn-warning'));
        filterBtns.forEach(b => b.classList.add('btn-outline-secondary'));
        this.classList.remove('btn-outline-secondary');
        this.classList.add('btn-warning');

        const filter = this.dataset.filter;
        let visibleCount = 0;
        galleryItems.forEach(item => {
            if (filter === 'All' || item.dataset.category === filter) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });
        galleryEmpty.classList.toggle('d-none', visibleCount > 0);
    });
});

// Lightbox
const lightboxModal = document.getElementById('lightboxModal');
lightboxModal.addEventListener('show.bs.modal', function(e) {
    const trigger = e.relatedTarget;
    document.getElementById('lightboxImg').src = trigger.dataset.img;
    document.getElementById('lightboxLabel').textContent = trigger.dataset.label;
    document.getElementById('lightboxCat').textContent = trigger.dataset.cat;
});
lightboxModal.addEventListener('hidden.bs.modal', function() {
    document.getElementById('lightboxImg').src = '';
});
</script>

<?php require_once 'includes/footer.php'; ?>
