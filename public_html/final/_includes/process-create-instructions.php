<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = sanitize_value ($_POST['title']);
$level_value = sanitize_value($_POST ['level']);
$image_value = sanitize_value ($_POST['image']);
$description_value = sanitize_value ($_POST['description']);
$materials_value = sanitize_value($_POST['materials']);
$instructions_value = sanitize_value($_POST['instructions']);




$result = add_instructions(
    $title_value,
    $level_value,
    $image_value,
    $description_value, 
    $materials_value, 
    $instructions_value
);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/instructions');
} else {
    $error_message = 'Sorry there was an error creating the instruction';
    redirect_to('/admin/instructions?error=' . $error_message);
}