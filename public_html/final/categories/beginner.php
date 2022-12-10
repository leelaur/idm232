<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Beginner Origami';
include_once __DIR__ . '/../_components/header.php';
?>
<?php include_once __DIR__ . '/../_components/headspace.php';?>


<?php include __DIR__ . '/../_components/categories-nav.php'; ?>


<?php

$query = "SELECT * FROM instructions WHERE level='Beginner'";
$result = mysqli_query($db_connection, $query);
?>

<?php
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result) ) {

        echo "
        <a href='{$site_url}/detail.php?id={$instructions['id']}' class='instructions-link'>
            <div class='cards all-origami'>
                <img class='cards-img' width='100px' height='100px' src='{$instructions['image']}' alt=''>                
                <div class=''>
                    <p class='title-txt'>{$instructions['title']}</p>
                    <p class='level-txt'> Level: {$instructions['level']}</p>
                </div> 
            </div>
        </a>    
        ";
    }
?>

<?php include_once __DIR__ . '/../_components/footer.php';