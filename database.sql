-- Database Creation
CREATE DATABASE IF NOT EXISTS tamilji_holidays;
USE tamilji_holidays;

-- Admin Table
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Bookings Table
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    destination VARCHAR(100) NOT NULL,
    travel_date DATE NOT NULL,
    passengers INT NOT NULL,
    status VARCHAR(20) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Enquiries Table
CREATE TABLE IF NOT EXISTS enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Vehicles Table
CREATE TABLE IF NOT EXISTS vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL,
    capacity INT NOT NULL,
    tariff VARCHAR(100) NOT NULL,
    features TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tour Packages Table
CREATE TABLE IF NOT EXISTS packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100) NOT NULL,
    name VARCHAR(200) NOT NULL,
    duration VARCHAR(100) NOT NULL,
    itinerary TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Testimonials Table
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    review TEXT NOT NULL,
    rating INT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Newsletter Table
CREATE TABLE IF NOT EXISTS newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Default Admin
-- Username: admin | Password: Admin@TamilJi2026
-- Generated via: password_hash('Admin@TamilJi2026', PASSWORD_BCRYPT)
INSERT INTO admin (username, password) VALUES 
('admin', '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi')
ON DUPLICATE KEY UPDATE username=username;

-- Insert Seed Vehicles
INSERT INTO vehicles (name, type, capacity, tariff, features, image_url) VALUES
('Sleek Sedan', 'Sedan', 4, 'Rs 12/km', 'Air Conditioning, Music System, GPS Tracker, 4 Bags Capacity', 'images/vehicles/sedan.jpg'),
('Premium SUV', 'SUV', 7, 'Rs 16/km', 'Spacious Legroom, Dual AC, Bluetooth Audio, Carrier System', 'images/vehicles/suv.jpg'),
('Innova Crysta Luxury', 'Innova Crysta', 7, 'Rs 20/km', 'Plush Captain Seats, Climate Control, Premium Audio, Experienced Driver', 'images/vehicles/crysta.jpg'),
('Tempo Traveller Comfort', 'Tempo Traveller', 12, 'Rs 24/km', 'AC Blowers, Reclining Seats, Led Screen, Karaoke System', 'images/vehicles/tempo.jpg'),
('Mini Bus Executive', 'Mini Bus', 21, 'Rs 30/km', 'Spacious Aisles, High Back Seats, AC, Large Luggage Bay', 'images/vehicles/minibus.jpg'),
('Semi-Sleeper Luxury Bus', 'Luxury Bus', 35, 'Rs 40/km', 'Push Back Seats, Reading Lights, Air Suspension, Charging Points', 'images/vehicles/luxurybus.jpg'),
('Volvo Premium Coach', 'Volvo Bus', 45, 'Rs 55/km', 'Full Air Conditioned, Washroom facility, Semi-Sleeper, Smooth Ride', 'images/vehicles/volvo.jpg');

-- Insert Seed Packages
INSERT INTO packages (category, name, duration, itinerary, price, image_url) VALUES
('Kerala Tours', 'Misty Hills of Munnar & Alleppey Houseboat', '4 Nights / 5 Days', 'Day 1: Arrival & Munnar Drive. Day 2: Munnar Sightseeing (Tea Museum, Mattupetty). Day 3: Drive to Alleppey, Check-in Houseboat. Day 4: Backwater cruise. Day 5: Departure.', 14999.00, 'images/packages/kerala_munnar.jpg'),
('Kodaikanal Tours', 'Romantic Kodaikanal Escape', '2 Nights / 3 Days', 'Day 1: Lake side stroll & Coakers walk. Day 2: Pine Forest, Pillar Rocks & Guna Caves. Day 3: Shopping and Departure.', 7999.00, 'images/packages/kodaikanal.jpg'),
('Ooty Tours', 'Scenic Queen of Hills - Ooty Tour', '3 Nights / 4 Days', 'Day 1: Arrival & Botanical Garden. Day 2: Doddabetta Peak, Pykara Lake. Day 3: Coonoor day trip & Toy Train. Day 4: Departure.', 9999.00, 'images/packages/ooty.jpg'),
('Rameshwaram Tours', 'Spiritual Madurai & Rameshwaram Pilgrimage', '3 Nights / 4 Days', 'Day 1: Madurai Meenakshi Temple, Palace. Day 2: Drive to Rameshwaram, Pamban Bridge, Temple Visit. Day 3: Dhanushkodi beach, APJ Memorial. Day 4: Return.', 8499.00, 'images/packages/rameshwaram.jpg'),
('Tirupati Tours', 'Balaji Darshan Express', '1 Night / 2 Days', 'Day 1: Travel to Tirupati, Check-in. Day 2: VIP Darshan at Tirumala, Padmavathi Temple, Departure.', 5499.00, 'images/packages/tirupati.jpg'),
('North India Tours', 'Golden Triangle Explorer', '5 Nights / 6 Days', 'Day 1: Delhi Arrival & Sightseeing. Day 2: Drive to Agra, Taj Mahal. Day 3: Agra to Jaipur via Fatehpur Sikri. Day 4: Jaipur Sightseeing (Amber Fort). Day 5: Return to Delhi. Day 6: Departure.', 24999.00, 'images/packages/golden_triangle.jpg'),
('Honeymoon Tours', 'Exotic Kerala HoneyMoon Special', '5 Nights / 6 Days', 'Day 1: Munnar Honeymoon Suite. Day 2: Candlelight Dinner & Sightseeing. Day 3: Thekkady wildlife. Day 4: Alleppey Luxury Houseboat. Day 5: Cochin Sightseeing. Day 6: Departure.', 28999.00, 'images/packages/honeymoon.jpg');

-- Insert Seed Testimonials
INSERT INTO testimonials (name, review, rating, image_url) VALUES
('Rohan Sharma', 'Absolutely incredible service! The Innova Crysta was sparkling clean and the driver was extremely polite and knowledgeable about local spots around Munnar. Highly recommended!', 5, 'images/testimonials/user1.jpg'),
('Priya Subramanian', 'Booked a 4-day Rameshwaram trip for my parents. Tamil Ji Holidays made it hassle-free. The accommodation and guides were excellent, very safe for seniors.', 5, 'images/testimonials/user2.jpg'),
('Anil Kumar', 'Very reasonable pricing and transparent billing. We rented a Tempo Traveller for our family trip to Kodaikanal. Comfortable seats and great audio system!', 4, 'images/testimonials/user3.jpg');
