<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Advanced Origami';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/headspace.php';?>


<?php include __DIR__ . '/../_components/categories-nav.php'; ?>

<?php

$query = "SELECT * FROM instructions WHERE level='Advanced'";
$result = mysqli_query($db_connection, $query);
?>

<?php
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result) ) {

        echo "
                <div class=''>
                    <div>
                        <h2 class='origami-instruction'>{$instructions['title']}</h2>
                    </div>
                </div>

        ";
    }
?>

<?php include_once __DIR__ . '/../_components/footer.php';