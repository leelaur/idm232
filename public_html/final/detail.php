<?php
include_once __DIR__ . '/app.php';
$page_title = 'Origami Instruction';
include_once __DIR__ . '/_components/header.php';
?>

<?php include_once __DIR__ . '/_components/headspace.php';?>

<?php
  if (!isset($instructions)) {
      echo '$instructions variable is not defined. Please check the code.';
  }
?>

<?php
$query = "SELECT * FROM instructions WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);

?>
          
<?php
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result)) {
        echo "
                <div class=''>
                <div>
                <h1 class='title '>{$instructions['title']}</h1>
                <p class='text-center'>Level: {$instructions['level']}</p>
  
            </div>


                    <div class='details-wrapper'>
                        <p class='details-section'>{$instructions['description']}</p>
                        <p class='details-section'><div class='details-subtitle'>Materials: <div>{$instructions['materials']}</p>
                        <p class='details-section'><div class='details-subtitle'>Instructions:</div>{$instructions['instructions']}</p>
                        <div class='details-img-container'>
                        <img class='details-img' width='500px' height='500px' src='{$site_url}/{$instructions['image']}' alt=''>
            </div>
                    </div>

        ";
    }
?>


 <?php include_once __DIR__ . '/_components/footer.php'; ?>


 