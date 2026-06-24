<?php
require_once 'includes/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['booking_name']) ? trim($_POST['booking_name']) : '';
    $phone = isset($_POST['booking_phone']) ? trim($_POST['booking_phone']) : '';
    $destination = isset($_POST['booking_destination']) ? trim($_POST['booking_destination']) : '';
    $travel_date = isset($_POST['booking_date']) ? trim($_POST['booking_date']) : '';
    $passengers = isset($_POST['booking_passengers']) ? intval($_POST['booking_passengers']) : 0;

    if (empty($name) || empty($phone) || empty($destination) || empty($travel_date) || $passengers <= 0) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please fill all required fields correctly.'
        ]);
        exit;
    }

    $success = save_booking($name, $phone, $destination, $travel_date, $passengers);

    if ($success) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Booking Submitted Successfully!'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error. Could not record booking.'
        ]);
    }
    exit;
}

// Redirect if accessed directly
header('Location: index.php');
exit;
