<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Categories';
include_once __DIR__ . '/../_components/header.php';
?>

<?php include_once __DIR__ . '../../_components/headspace.php';?>

<body>

    <main>
    <?php include __DIR__ . '/../_components/categories-nav.php'; ?>
    

        <?php
// get users data from database
$query = "SELECT * FROM instructions ORDER BY title ASC";
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


 <?php include_once __DIR__ . '/../_components/footer.php'; ?>
    </main>

    <?php include_once __DIR__ . '/../_components/footer.php';?>
</body>
</html>


