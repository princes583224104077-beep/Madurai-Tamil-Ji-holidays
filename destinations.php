<?php
require_once 'includes/db.php';

$page_title = "Popular Destinations | Madurai Tamil Ji Holidays";
$page_description = "Discover tourist attractions across South India including Madurai temples, Rameshwaram pilgrimage sites, Munnar backwaters, and Ooty hills.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';

$destinations = [
    [
        'name' => 'Madurai',
        'subtitle' => 'The Athina of the East',
        'desc' => 'Famous for the majestic Meenakshi Amman Temple, Thirumalai Nayakar Palace, and authentic Jasmine flower markets.',
        'img' => 'https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Rameshwaram',
        'subtitle' => 'The Holy Island Town',
        'desc' => 'Home to Ramanathaswamy Temple, holy thirthas, spectacular Pamban Bridge views, and Dhanushkodi ghost town beaches.',
        'img' => 'https://images.unsplash.com/photo-1590050752117-238cb0fb12b1?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Kanyakumari',
        'subtitle' => 'The Land\'s End',
        'desc' => 'Experience the unique sunrise and sunset views at Triveni Sangam, Vivekananda Rock Memorial, and Thiruvalluvar Statue.',
        'img' => 'https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Kodaikanal',
        'subtitle' => 'Princess of Hill Stations',
        'desc' => 'Enjoy boating in Kodai Lake, scenic Pine Forest walk, Coakers Walk panoramic valleys, and Pillar Rock cliffs.',
        'img' => 'https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Ooty',
        'subtitle' => 'Queen of Hill Stations',
        'desc' => 'Lush Botanical Gardens, beautiful Pykara Lake boating, Doddabetta Peak hiking, and historic Nilgiri Mountain Toy Train rides.',
        'img' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Munnar',
        'subtitle' => 'Lush Green Tea Valleys',
        'desc' => 'Stroll in rolling tea estates, witness cascading waterfalls, Eravikulam National Park wildlife, and Mattupetty reservoir.',
        'img' => 'https://images.unsplash.com/photo-1593693397690-362cb9666fc2?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Alleppey',
        'subtitle' => 'Venice of the East',
        'desc' => 'Sail in traditional luxury houseboats over peaceful backwater canals, through green paddy fields and coconut groves.',
        'img' => 'https://images.unsplash.com/photo-1593693411515-c202e974fe08?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Mysore',
        'subtitle' => 'City of Palaces',
        'desc' => 'Explore the grand Mysore Palace, Chamundi Hills temple, Vrindavan Gardens fountain shows, and traditional silk markets.',
        'img' => 'https://images.unsplash.com/photo-1582510003544-4d00b7f74220?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Coorg',
        'subtitle' => 'The Scotland of India',
        'desc' => 'Visit fragrant coffee estates, spectacular Abbey waterfalls, Golden Temple Buddhist monastery, and Nisargadhama forest.',
        'img' => 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?auto=format&fit=crop&w=500&q=80'
    ],
    [
        'name' => 'Tirupati',
        'subtitle' => 'The Spiritual Citadel',
        'desc' => 'Visit Sri Venkateswara Temple on Tirumala hills, one of the most sacred and rich Hindu pilgrimage sites globally.',
        'img' => 'https://images.unsplash.com/photo-1608958415714-38600d81b374?auto=format&fit=crop&w=500&q=80'
    ]
];
?>

<!-- Banner Header -->
<section class="py-5 text-center text-white" style="background: var(--gradient-primary); position: relative;">
    <div class="container py-4">
        <h1 class="display-4 fw-bold">Popular Destinations</h1>
        <p class="lead text-warning mb-0">Discover Enchanting Landscapes and Holy Shrines</p>
    </div>
</section>

<!-- Destinations Grid -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($destinations as $dest): ?>
            <div class="col-lg-4 col-md-6">
                <div class="destination-card" data-bs-toggle="modal" data-bs-target="#bookingModal" data-destination="<?php echo htmlspecialchars($dest['name']); ?>">
                    <img src="<?php echo htmlspecialchars($dest['img']); ?>" alt="<?php echo htmlspecialchars($dest['name']); ?>" class="destination-img" onerror="this.src='https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=500&q=80'">
                    <div class="destination-overlay">
                        <h3 class="text-white fw-bold mb-0"><?php echo htmlspecialchars($dest['name']); ?></h3>
                        <span class="text-warning small fw-semibold"><?php echo htmlspecialchars($dest['subtitle']); ?></span>
                        <p class="destination-description"><?php echo htmlspecialchars($dest['desc']); ?></p>
                        <div class="mt-2 text-warning small fw-bold">
                            <i class="fa-solid fa-circle-arrow-right me-1"></i> Book Tour Package
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Bottom booking prompt -->
<section class="py-5 bg-white text-center">
    <div class="container">
        <h3 class="fw-bold mb-3">Ready to Start Your Adventure?</h3>
        <p class="text-secondary max-width-600 mx-auto mb-4">Our cars and guides are ready. Choose your destination and travel dates to book your customizable family package today.</p>
        <button class="btn btn-warning btn-lg px-5 rounded-pill fw-bold text-uppercase shadow" data-bs-toggle="modal" data-bs-target="#bookingModal">
            <i class="fa-solid fa-calendar-days me-2"></i> Book Tour Now
        </button>
    </div>
</section>

<?php
require_once 'includes/footer.php';
?>
