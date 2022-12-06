<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Home';

include_once __DIR__ . '/../_components/header.php';

//redirect
redirect_to('/admin/users');
?>
<?php include_once __DIR__ . '/../_components/headspace.php';?>

<?php include_once __DIR__ . '/../_components/footer.php';?>
