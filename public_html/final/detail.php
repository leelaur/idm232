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
                <h1 class='title detail-title'>{$instructions['title']}</h1>
                <p class='text-center'>Level: {$instructions['level']}</p>
  
            </div>


                    <div class='details-wrapper'>
                        <p class='details-section'>
                            {$instructions['description']}
                        </p>
                        <div class='details-section'>
                            <p class='details-subtitle'>
                                Materials:
                            </p>
                            <p>
                                {$instructions['materials']}
                            </p>
                        </div>
                        <div class='details-section'>
                        <p class='details-subtitle'>
                                Instructions:
                            </p>
                            <p class=''>
                                {$instructions['instructions']}
                            </p>
                        </div>
                        <img class='details-img' width='500px' height='500px' src='{$site_url}/{$instructions['image']}' alt=''>
                    </div>

        ";
    }
?>


 <?php include_once __DIR__ . '/_components/footer.php'; ?>


 