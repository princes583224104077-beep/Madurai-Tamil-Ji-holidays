<?php
session_start();
require_once 'includes/db.php';

$page_title = "Madurai Tamil Ji Holidays - Tours and Travels Holidays Packages at Affordable Rentals";
$page_description = "Madurai Best Travel Agency. Provides Tours and Holidays packages at affordable price. Call +91 98429 16996 for Madurai Cab Rental, Madurai Package Tours, Holidays Packages, Calltaxi Rentals and Hotel Booking.";

require_once 'includes/header.php';
require_once 'includes/navbar.php';
?>


<!-- HERO SECTION -->
<div class="hero-wrap" id="home">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=1600&q=80" alt="Meenakshi Temple">
        <div class="overlay"></div>
        <div class="carousel-caption-custom">
          <span class="badge-tag">🏛️ Madurai – The Temple City</span>
          <h1>Explore the <span>Heart</span> of Tamil Nadu</h1>
          <p>Experience the divine grandeur of Meenakshi Temple, the ancient bazaars, and the soulful culture of Madurai with our exclusive tours.</p>
          <a href="#packages" class="btn btn-quote me-3"><i class="fas fa-map-marked-alt me-2"></i>Explore Packages</a>
          <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=1600&q=80" alt="Kerala Backwaters">
        <div class="overlay"></div>
        <div class="carousel-caption-custom">
          <span class="badge-tag">🌴 God's Own Country</span>
          <h1>Discover <span>Kerala</span> Backwaters</h1>
          <p>Glide through serene backwaters, lush tea estates and pristine beaches in a houseboat crafted for royalty.</p>
          <a href="#packages" class="btn btn-quote me-3"><i class="fas fa-map-marked-alt me-2"></i>View Packages</a>
          <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1600&q=80" alt="Ooty Hills">
        <div class="overlay"></div>
        <div class="carousel-caption-custom">
          <span class="badge-tag">🏔️ Queen of Hill Stations</span>
          <h1>Breathe <span>Ooty's</span> Cool Breeze</h1>
          <p>Journey through misty mountain roads, fragrant tea gardens and enchanting Nilgiri forests.</p>
          <a href="#packages" class="btn btn-quote me-3"><i class="fas fa-map-marked-alt me-2"></i>View Packages</a>
          <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=1600&q=80" alt="Rajasthan">
        <div class="overlay"></div>
        <div class="carousel-caption-custom">
          <span class="badge-tag">🏯 Golden North India</span>
          <h1>The Colors of <span>Rajasthan</span></h1>
          <p>Majestic palaces, golden deserts and the timeless Taj Mahal await you on our North India grand tour.</p>
          <a href="#packages" class="btn btn-quote me-3"><i class="fas fa-map-marked-alt me-2"></i>View Packages</a>
          <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>


</div>

<!-- STATS BAR -->
<div class="stats-bar">
  <div class="container-fluid px-0">
    <div class="row g-0">
      <div class="col-6 col-md-3 stat-item">
        <div class="stat-num" data-count="5000">0</div>
        <div class="stat-label">Happy Travellers</div>
      </div>
      <div class="col-6 col-md-3 stat-item">
        <div class="stat-num" data-count="150">0</div>
        <div class="stat-label">Destinations</div>
      </div>
      <div class="col-6 col-md-3 stat-item">
        <div class="stat-num" data-count="50">0</div>
        <div class="stat-label">Tour Packages</div>
      </div>
      <div class="col-6 col-md-3 stat-item">
        <div class="stat-num" data-count="12">0</div>
        <div class="stat-label">Years Experience</div>
      </div>
    </div>
  </div>
</div>

<!-- ABOUT SECTION -->
<section class="about-section" id="about">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-tag">About Us</span>
      <h2 class="section-title">Why Choose <span>Madurai Tamil Ji</span> Holidays?</h2>
      <p class="text-muted mx-auto" style="max-width:580px;">With over 12 years of trusted service from the heart of Madurai, we specialize in creating unforgettable travel experiences across South and North India.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-3 col-sm-6 fade-up">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-shield-alt"></i></div>
          <h5>Trusted &amp; Reliable</h5>
          <p>12+ years of trustworthy service with thousands of satisfied customers across Tamil Nadu and beyond.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.1s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-car"></i></div>
          <h5>Premium Fleet</h5>
          <p>Well-maintained AC vehicles from sedans to luxury buses, all GPS-tracked for your safety and comfort.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.2s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-headset"></i></div>
          <h5>24/7 Support</h5>
          <p>Our dedicated travel experts are available round-the-clock via call, WhatsApp and email for assistance.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.3s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-tags"></i></div>
          <h5>Best Rates</h5>
          <p>Transparent pricing with no hidden charges. Compare and get the most value for your travel budget.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.1s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-user-tie"></i></div>
          <h5>Expert Guides</h5>
          <p>Experienced local guides with deep knowledge of culture, history and hidden gems at every destination.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.2s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-hotel"></i></div>
          <h5>Hotel Booking</h5>
          <p>Partner hotels at exclusive rates — budget to luxury, we handle your accommodation seamlessly.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.3s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-hands-praying"></i></div>
          <h5>Pilgrimage Tours</h5>
          <p>Specialized pilgrimage packages for Rameshwaram, Tirupati, Palani, Kashi and all major temples.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 fade-up" style="transition-delay:0.4s">
        <div class="about-card">
          <div class="icon-wrap"><i class="fas fa-heart"></i></div>
          <h5>Honeymoon Specials</h5>
          <p>Curated romantic packages with special surprises, flower decorations and private couple experiences.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VEHICLE RENTALS -->
<section class="vehicles-section" id="vehicles">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-tag" style="background:rgba(0,153,204,0.15); color:var(--primary);">Our Fleet</span>
      <h2 class="section-title">Vehicle <span>Rental Tariffs</span></h2>
      <p class="text-muted mx-auto" style="max-width:560px;">Choose from our diverse fleet of comfortable and well-maintained vehicles. All vehicles are AC, GPS-tracked, and driven by professional chauffeurs.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1590362891991-f776e747a588?w=600&q=80" alt="Sedan">
            <span class="vehicle-badge">Sedan</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Dzire / Etios Sedan</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 4 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹1,200</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹12/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹14/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹300/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=600&q=80" alt="Innova">
            <span class="vehicle-badge" style="background:var(--gold);color:#000;">Premium</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Toyota Innova / Crysta</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 7 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹2,200</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹18/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹20/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹400/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1609952048180-7b35ea6b083b?w=600&q=80" alt="Tempo Traveller">
            <span class="vehicle-badge" style="background:#16a34a;">Popular</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Tempo Traveller 12/15 Seat</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 15 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹4,500</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹28/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹30/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹500/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1557223562-6c77ef16210f?w=600&q=80" alt="Mini Bus">
            <span class="vehicle-badge" style="background:#7c3aed;">Group</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Mini Bus 20/25 Seater</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 25 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹7,000</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹42/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹45/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹600/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1570125909232-eb263c188f7e?w=600&q=80" alt="Luxury Bus">
            <span class="vehicle-badge" style="background:#b45309;">Luxury</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">AC Luxury Coach 35 Seat</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 35 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹12,000</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹65/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹70/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹800/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=600&q=80" alt="SUV">
            <span class="vehicle-badge" style="background:#0ea5e9;">SUV</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Toyota Fortuner / SUV</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 6 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹3,500</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹24/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹26/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹500/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?w=600&q=80" alt="Luxury Bus 45">
            <span class="vehicle-badge">Super</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Super Luxury Coach 45 Seat</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 45 Passengers</div>
            <table class="tariff-table">
              <tr><th>Local (8hr)</th><td class="text-end"><span class="price">₹18,000</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹85/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹90/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹1,000/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="vehicle-card">
          <div class="vehicle-img-wrap">
            <img src="https://images.unsplash.com/photo-1551836022-4c4c79ecde51?w=600&q=80" alt="Volvo">
            <span class="vehicle-badge" style="background:#0b132b;">Volvo</span>
          </div>
          <div class="vehicle-body">
            <div class="vehicle-name">Volvo Sleeper Bus</div>
            <div class="capacity-badge mb-3"><i class="fas fa-users"></i> Up to 36 Berths</div>
            <table class="tariff-table">
              <tr><th>Min KM/Day</th><td class="text-end"><span class="price">250 KM</span></td></tr>
              <tr><th>Per KM</th><td class="text-end"><span class="price">₹95/km</span></td></tr>
              <tr><th>Outstation</th><td class="text-end"><span class="price">₹100/km</span></td></tr>
              <tr><th>Driver Bata</th><td class="text-end"><span class="price">₹1,200/day</span></td></tr>
            </table>
            <a href="#" class="btn-vehicle mt-3" data-bs-toggle="modal" data-bs-target="#bookingModal">Book Now <i class="fas fa-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-4">
      <p class="text-muted small">* Toll, parking &amp; state taxes extra. Minimum 250km/day for outstation. Driver bata included in local trips.</p>
    </div>
  </div>
</section>

<!-- TOUR PACKAGES -->
<section class="packages-section" id="packages">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-tag">Best Selling</span>
      <h2 class="section-title">Popular <span>Tour Packages</span></h2>
      <p class="text-muted mx-auto" style="max-width:560px;">Handcrafted travel experiences covering the finest temples, beaches, hills and heritage sites across South and North India.</p>
    </div>
    <div class="row g-4">
      <?php
      // Fetch packages dynamically
      $packages = array_slice(get_packages(), 0, 6);
      
      // Highlights mapping for dynamic packages on homepage
      $package_highlights = [
          'Kerala Backwaters & Munnar Special' => ['Houseboat Stay', 'Tea Estate Visit', 'Kathakali Show', 'Spice Garden'],
          'Misty Hills of Munnar & Alleppey Houseboat' => ['Houseboat Stay', 'Tea Estate Visit', 'Kathakali Show', 'Spice Garden'],
          'Ooty, Kodaikanal & Coorg Tour' => ['Toy Train', 'Boat House', 'Rose Garden', 'Coffee Plantation'],
          'Scenic Queen of Hills - Ooty Tour' => ['Toy Train', 'Botanical Garden', 'Coonoor Day Trip', 'Tea Factory'],
          'Romantic Kodaikanal Escape' => ['Lake Boating', 'Pillar Rocks', 'Coakers Walk', 'Pine Forest'],
          'Rajasthan Golden Triangle Tour' => ['Taj Mahal', 'Amer Fort', 'Lake Palace', 'Camel Safari'],
          'Golden Triangle Explorer' => ['Taj Mahal', 'Amber Fort', 'Jaipur Palace', 'Agra Fort'],
          'Rameshwaram & Dhanushkodi Tour' => ['Temple Darshan', '22 Theerthams', 'Pamban Bridge', 'Adam\'s Bridge'],
          'Spiritual Madurai & Rameshwaram Pilgrimage' => ['Meenakshi Temple', 'Pamban Bridge', 'Dhanushkodi', '22 Theerthams'],
          'Kerala Honeymoon Paradise' => ['Private Houseboat', 'Candle Dinner', 'Couple Spa', 'Sunset Cruise'],
          'Exotic Kerala HoneyMoon Special' => ['Honeymoon Suite', 'Candlelight Dinner', 'Thekkady Wildlife', 'Luxury Houseboat'],
          'Tirupati Balaji Darshan Special' => ['E-Ticket Booking', 'Laddu Prasad', 'Temple Guide', 'Round Trip'],
          'Balaji Darshan Express' => ['VIP Darshan', 'Laddu Prasad', 'Padmavathi Temple', 'Chauffeur Driven']
      ];

      // Duration emoji map helper
      $duration_emojis = [
          'kerala' => '🌊',
          'ooty' => '🏔️',
          'kodaikanal' => '🏔️',
          'rameshwaram' => '🙏',
          'tirupati' => '🌸',
          'honeymoon' => '💑',
          'north india' => '🏯',
          'gold' => '🏯'
      ];
      
      foreach ($packages as $pkg):
          $pkg_name = $pkg['name'];
          
          // Determine tags
          $tags = isset($package_highlights[$pkg_name]) ? $package_highlights[$pkg_name] : ['Sightseeing', 'AC Vehicle', 'Guide Assist', 'Hotel Stay'];
          
          // Determine badge tag (e.g. Best Seller, Hill Station, Pilgrim, Premium, Honeymoon, Darshan)
          $badge = 'Tour';
          $badge_bg = '';
          $category_lower = strtolower($pkg['category']);
          if (strpos($category_lower, 'kerala') !== false) {
              $badge = 'Best Seller';
          } elseif (strpos($category_lower, 'ooty') !== false || strpos($category_lower, 'kodaikanal') !== false) {
              $badge = 'Hill Station';
              $badge_bg = 'style="background:var(--primary);"';
          } elseif (strpos($category_lower, 'rameshwaram') !== false) {
              $badge = 'Pilgrim';
              $badge_bg = 'style="background:var(--gold);color:#000;"';
          } elseif (strpos($category_lower, 'tirupati') !== false) {
              $badge = 'Darshan';
              $badge_bg = 'style="background:var(--gold);color:#000;"';
          } elseif (strpos($category_lower, 'honeymoon') !== false) {
              $badge = 'Honeymoon';
              $badge_bg = 'style="background:#e11d48;"';
          } elseif (strpos($category_lower, 'north') !== false) {
              $badge = 'Premium';
              $badge_bg = 'style="background:#7c3aed;"';
          }
          
          // Determine duration icon
          $dur_emoji = '📍';
          foreach ($duration_emojis as $key => $emo) {
              if (strpos(strtolower($pkg_name), $key) !== false || strpos($category_lower, $key) !== false) {
                  $dur_emoji = $emo;
                  break;
              }
          }
      ?>
      <div class="col-lg-4 col-md-6">
        <div class="pkg-card">
          <div class="pkg-img">
            <img src="<?php echo htmlspecialchars($pkg['image_url']); ?>" alt="<?php echo htmlspecialchars($pkg_name); ?>" onerror="this.src='https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?auto=format&fit=crop&w=800&q=80'">
            <span class="pkg-days"><?php echo $dur_emoji . ' ' . htmlspecialchars($pkg['duration']); ?></span>
            <span class="pkg-tag" <?php echo $badge_bg; ?>><?php echo htmlspecialchars($badge); ?></span>
          </div>
          <div class="pkg-body">
            <div class="pkg-title"><?php echo htmlspecialchars($pkg_name); ?></div>
            <div class="pkg-meta">
              <span><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($pkg['category']); ?></span>
              <span><i class="fas fa-users"></i> Custom Groups</span>
            </div>
            <p class="pkg-desc"><?php echo htmlspecialchars(substr($pkg['itinerary'], 0, 140)) . '...'; ?></p>
            <div class="highlights">
              <?php foreach ($tags as $tag): ?>
                <span class="hl-tag"><?php echo htmlspecialchars($tag); ?></span>
              <?php endforeach; ?>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="pkg-price">₹<?php echo number_format($pkg['price']); ?> <small>/person</small></div>
              <button class="btn btn-warning px-3 rounded-pill fw-bold text-uppercase py-2 btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-package-name="<?php echo htmlspecialchars($pkg_name); ?>" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                Enquire
              </button>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- DESTINATIONS AUTO-SCROLL -->
<section class="destinations-section" id="destinations">
  <div class="container mb-5">
    <div class="text-center">
      <span class="section-tag" style="background:rgba(0,153,204,0.15);color:var(--primary);">Explore</span>
      <h2 class="section-title">Popular <span>Destinations</span></h2>
      <p class="text-muted mx-auto" style="max-width:540px;">From divine temples to misty mountains, pristine beaches to royal palaces — explore India's finest destinations.</p>
    </div>
  </div>
  <div class="dest-scroll-wrap">
    <div class="dest-track" id="destTrack">
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=500&q=80" alt="Madurai"><div class="dest-overlay"><div class="dest-name">Madurai</div><div class="dest-count">12 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=500&q=80" alt="Kerala"><div class="dest-overlay"><div class="dest-name">Kerala</div><div class="dest-count">18 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=500&q=80" alt="Ooty"><div class="dest-overlay"><div class="dest-name">Ooty</div><div class="dest-count">8 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=500&q=80" alt="Rajasthan"><div class="dest-overlay"><div class="dest-name">Rajasthan</div><div class="dest-count">10 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1519904981063-b0cf448d479e?w=500&q=80" alt="Kodaikanal"><div class="dest-overlay"><div class="dest-name">Kodaikanal</div><div class="dest-count">6 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1605649487212-47bdab064df7?w=500&q=80" alt="Coorg"><div class="dest-overlay"><div class="dest-name">Coorg</div><div class="dest-count">7 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?w=500&q=80" alt="Kanyakumari"><div class="dest-overlay"><div class="dest-name">Kanyakumari</div><div class="dest-count">5 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1605649487212-47bdab064df7?w=500&q=80" alt="Mysore"><div class="dest-overlay"><div class="dest-name">Mysore</div><div class="dest-count">9 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <!-- Duplicated for seamless infinite loop -->
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1582510003544-4d00b7f74220?w=500&q=80" alt="Madurai"><div class="dest-overlay"><div class="dest-name">Madurai</div><div class="dest-count">12 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1602216056096-3b40cc0c9944?w=500&q=80" alt="Kerala"><div class="dest-overlay"><div class="dest-name">Kerala</div><div class="dest-count">18 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=500&q=80" alt="Ooty"><div class="dest-overlay"><div class="dest-name">Ooty</div><div class="dest-count">8 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1524492412937-b28074a5d7da?w=500&q=80" alt="Rajasthan"><div class="dest-overlay"><div class="dest-name">Rajasthan</div><div class="dest-count">10 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1519904981063-b0cf448d479e?w=500&q=80" alt="Kodaikanal"><div class="dest-overlay"><div class="dest-name">Kodaikanal</div><div class="dest-count">6 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1605649487212-47bdab064df7?w=500&q=80" alt="Coorg"><div class="dest-overlay"><div class="dest-name">Coorg</div><div class="dest-count">7 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1567636788276-40a47795ba4d?w=500&q=80" alt="Kanyakumari"><div class="dest-overlay"><div class="dest-name">Kanyakumari</div><div class="dest-count">5 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
      <div class="dest-card"><img src="https://images.unsplash.com/photo-1605649487212-47bdab064df7?w=500&q=80" alt="Mysore"><div class="dest-overlay"><div class="dest-name">Mysore</div><div class="dest-count">9 Packages</div><div class="dest-arrow"><i class="fas fa-arrow-right"></i></div></div></div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section" id="testimonials">
  <div class="container mb-4">
    <div class="text-center">
      <span class="section-tag">Reviews</span>
      <h2 class="section-title">What Our <span>Travellers Say</span></h2>
      <p class="text-muted mx-auto" style="max-width:520px;">Real stories from real travellers who experienced our tours, vehicles and hospitality first-hand.</p>
    </div>
  </div>
  <div class="testi-carousel-wrap px-3">
    <div class="testi-track" id="testiTrack">
      <?php
      $testimonials = get_testimonials();
      $duplicated_testimonials = array_merge($testimonials, $testimonials);
      $idx = 1;
      foreach ($duplicated_testimonials as $testi):
          $avatar = !empty($testi['image_url']) ? $testi['image_url'] : "https://i.pravatar.cc/100?img=" . (($idx % 10) + 1);
          $idx++;
      ?>
      <div class="testi-card">
        <div class="testi-stars">
          <?php for($i = 0; $i < $testi['rating']; $i++): ?>
            <i class="fas fa-star"></i>
          <?php endfor; ?>
          <?php if($testi['rating'] < 5): ?>
            <?php for($i = 0; $i < (5 - $testi['rating']); $i++): ?>
              <i class="far fa-star"></i>
            <?php endfor; ?>
          <?php endif; ?>
        </div>
        <p class="testi-text"><?php echo htmlspecialchars($testi['review']); ?></p>
        <div class="testi-author">
          <img src="<?php echo htmlspecialchars($avatar); ?>" class="testi-avatar" alt="Customer">
          <div>
            <div class="testi-name"><?php echo htmlspecialchars($testi['name']); ?></div>
            <div class="testi-role">Verified Traveller</div>
            <div class="testi-loc"><i class="fas fa-map-marker-alt me-1"></i>India</div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CALL TO ACTION & CONTACT -->
<section class="cta-section" id="contact">
  <div class="container position-relative">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6 text-center text-lg-start">
        <h2>Ready to Start Your <br><span style="color:var(--gold);">Dream Journey?</span></h2>
        <p>Let our travel experts craft the perfect itinerary for you. Get a free customized quote today — no obligations, just possibilities!</p>
        <a href="#" class="btn-cta-primary me-3" data-bs-toggle="modal" data-bs-target="#bookingModal"><i class="fas fa-paper-plane me-2"></i>Get Free Quote</a>
        <a href="https://wa.me/919842916996" class="btn-cta-secondary" target="_blank"><i class="fab fa-whatsapp me-2"></i>Chat on WhatsApp</a>
      </div>
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6">
            <div class="cta-phone-wrap">
              <div class="phone-label">📞 Call Us Now</div>
              <div class="phone-num">+91 98429 16996</div>
              <div class="phone-label mt-1">Mon–Sun: 7AM – 10PM</div>
            </div>
          </div>
          <div class="col-6">
            <div class="cta-phone-wrap" style="border-color:rgba(37,211,102,0.4);">
              <div class="phone-label">💬 WhatsApp</div>
              <div class="phone-num" style="font-size:1.3rem;">+91 98429 16996</div>
              <div class="phone-label mt-1">24/7 Available</div>
            </div>
          </div>
          <div class="col-12">
            <div class="cta-phone-wrap">
              <div class="phone-label">📍 Our Office</div>
              <div class="phone-num" style="font-size:1.1rem;">Madurai, Tamil Nadu</div>
              <div class="phone-label mt-1"><a href="mailto:maduraitamiljiholidays@gmail.com" style="color:var(--gold);">maduraitamiljiholidays@gmail.com</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT FORM & MAP -->
<section style="padding:80px 0 0; background:#fff;">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <span class="section-tag">Send Us a Message</span>
        <h2 class="section-title mb-4">Get in <span>Touch</span></h2>
        <form id="mainContactForm" action="enquiry_submit.php" method="POST">
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Your Full Name *" name="enquiry_name" required>
            </div>
            <div class="col-md-6">
              <input type="tel" class="form-control" placeholder="Phone Number *" name="enquiry_phone" required>
            </div>
            <div class="col-12">
              <input type="email" class="form-control" placeholder="Email Address *" name="enquiry_email" required>
            </div>
            <div class="col-md-6">
              <select class="form-select" name="enquiry_package_name">
                <option value="General Enquiry">Select Destination / Package</option>
                <option>Kerala Tour</option>
                <option>Ooty / Kodaikanal</option>
                <option>Rameshwaram Pilgrim</option>
                <option>Tirupati Darshan</option>
                <option>Rajasthan Tour</option>
                <option>Honeymoon Package</option>
                <option>Vehicle Rental Only</option>
              </select>
            </div>
            <div class="col-md-6">
              <input type="date" class="form-control" name="travel_date" min="<?php echo date('Y-m-d'); ?>" placeholder="Travel Date">
            </div>
            <div class="col-12">
              <textarea class="form-control" rows="4" placeholder="Your Message or Special Requirements..." name="enquiry_message" required></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-book w-100 py-3">
                <i class="fas fa-paper-plane me-2"></i>Send Message
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
        <div class="rounded-4 overflow-hidden shadow-lg" style="height:420px;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m10!1m3!1d125766.19568779646!2d78.04637402636284!3d9.917856799009855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b118c53a%3A0x3406e9da8979c5d9!2sMadurai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1718274092789!5m2!1sen!2sin"
            width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once 'includes/footer.php';
?>
