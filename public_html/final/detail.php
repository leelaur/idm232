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
    while ($get_instructions = mysqli_fetch_array($result)) {
        echo "
                <div class=''>
                    <div>
                        <h2 class=''>{$instructions['title']}</h2>
                        <p class=''>{$instructions['level']}</p>
                    </div>
                    <img class='' width='500px' height='500px' src='{$site_url}/{$instructions['image']}' alt=''>

                    <div>
                        <p class=''>{$instructions['description']}</p>
                        <p class=''>{$instructions['materials']}</p>
                        <p class=''>{$instructions['instructions']}</p>
                    </div>

        ";
    }
?>


 <?php include_once __DIR__ . '/_components/footer.php'; ?>


 