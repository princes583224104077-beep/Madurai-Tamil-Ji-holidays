<?php
require_once 'includes/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['newsletter_email']) ? trim($_POST['newsletter_email']) : '';

    if (empty($email)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Please enter an email address.'
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

    $success = save_newsletter($email);

    if ($success) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Subscribed Successfully! Thank you.'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Could not process newsletter subscription.'
        ]);
    }
    exit;
}

// Redirect if accessed directly
header('Location: index.php');
exit;
