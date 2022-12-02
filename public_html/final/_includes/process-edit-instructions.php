<?php
include __DIR__ . '/../app.php';

if (!$_POST) {
    die('Unauthorized');
}

// Store $_POST data to variables for readability
$title_value = sanitize_value($_POST['title']);
$description_value = sanitize_value($_POST['description']);
$materials_value = sanitize_value($_POST['materials']);
$instructions_value = sanitize_value($_POST['instructions']);
$id_value = sanitize_value($_POST['id']);

// Create a SQL statement to insert the data into the database
$query = "UPDATE instructions SET title = '{$title_value}', description = '{$description_value}', materials = '{$materials_value}', instructions = '{$instructions_value}' WHERE id = {$id_value}";

// Run the SQL statement
$result = mysqli_query($db_connection, $query);

// Check there are no errors with our SQL statement
if ($result) {
    redirect_to('/admin/instructions');
} else {
    $error_message = 'User was not updated';
    redirect_to('/admin/instructions?error=' . $error_message);
}