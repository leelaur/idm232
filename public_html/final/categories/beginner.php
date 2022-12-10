<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Beginner Origami';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/headspace.php';?>


<?php include __DIR__ . '/../_components/categories-nav.php'; ?>


<?php
// or if there can be values other than 0 and 1
$level_select = array_keys(array_column($instructions, 'selected'), 'beginner');

$query = "SELECT * FROM instructions ORDER BY level ASC";
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result) ) {

        echo "
                <div class=''>
                    <div>
                        <h2 class='origami-instruction'>{$instructions['level']}</h2>
                    </div>
                </div>

        ";
    }
?>

<?php include_once __DIR__ . '/../_components/footer.php';