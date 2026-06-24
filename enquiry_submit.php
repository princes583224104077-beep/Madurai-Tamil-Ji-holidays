<?php
require_once 'includes/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['enquiry_name']) ? trim($_POST['enquiry_name']) : '';
    $email = isset($_POST['enquiry_email']) ? trim($_POST['enquiry_email']) : '';
    $phone = isset($_POST['enquiry_phone']) ? trim($_POST['enquiry_phone']) : '';
    $message = isset($_POST['enquiry_message']) ? trim($_POST['enquiry_message']) : '';
    $package_name = isset($_POST['enquiry_package_name']) ? trim($_POST['enquiry_package_name']) : '';

    if (empty($name) || empty($email) || empty($phone)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please fill all required fields.'
        ]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please enter a valid email address.'
        ]);
        exit;
    }

    // Format final message to include package name if present
    $final_message = "";
    if (!empty($package_name)) {
        $final_message .= "Package Interested: " . $package_name . "\n";
    }
    $final_message .= "Message: " . (empty($message) ? 'No custom requirements specified.' : $message);

    $success = save_enquiry($name, $email, $phone, $final_message);

    if ($success) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Enquiry Submitted Successfully!'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Database error. Could not record enquiry.'
        ]);
    }
    exit;
}

// Redirect if accessed directly
header('Location: index.php');
exit;
