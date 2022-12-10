<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<main>
         <div class="search wrapper">
            <div class="search-img--center">
                <img src="dist/images/search-img.png" class="search-img">
                <form action="<?php echo site_url(); ?>/search" method="GET"class="search-bar" id="form"> 
                    <input type="search" placeholder="Search..." class="search-box"name="search">
                    <button class="search-button">Search</button>
                </form>
            </div>
        </div>
        <hr>
        <?php
// get users data from database
$query = "SELECT * FROM instructions";
$result = mysqli_query($db_connection, $query);
?>
          

        </div>

        <?php include __DIR__ . '/_components/card.php'; ?>
    </main>
    

<?php include_once __DIR__ . '/_components/footer.php';