<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<?php include_once __DIR__ . '/_components/headspace.php';?>


         <div class="search wrapper">
            <div class="search-img--center">
            <img src="dist/images/search-img.png" class="search-img">    
            <div>
                
            <h1 class="title"> Welcome to Unfolded Origami! </h1>
            <p style="text-align:center;"> 
                Learn and make origami from our 40+ instructions. Choose from our featured origami or choose any level of difficulty in categories to get started.
                 </p>
            </div>
    
                <form action="<?php echo site_url(); ?>/search" method="GET"class="search-bar" id="form"> 
                    <input type="search" placeholder="Search..." class="search-box"name="search">
                    <button class="search-button">Search</button>
                </form>
            </div>
        </div>




        <?php
// get users data from database
$query = "SELECT * FROM instructions";
$result = mysqli_query($db_connection, $query);
?>
<div style="position:static;"> 
          <h2 class="subtitle"> Featured Origami </h2>
<div class="all-origami">

        <?php include __DIR__ . '/_components/card.php'; ?>

</div>
</div>
<?php include_once __DIR__ . '/_components/footer.php';