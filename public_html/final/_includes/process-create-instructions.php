<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = $_POST['title'];
$description_value = $_POST['description'];
$materials_value = $_POST['materials'];
$instructions_value = $_POST['instructions'];

$result = add_services(
    $title_value,
    $description_value, 
    $materials_value, 
    $instructions_value);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/instructions');
} else {
    $error_message = 'Sorry there was an error creating the instruction';
    redirect_to('/admin/instructions?error=' . $error_message);
}