<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Search Results';
include_once __DIR__ . '/../_components/header.php';
$instructions = get_instructions();



// Check if search exist in query
if (isset($_GET['search'])) {
    $search = $_GET['search'];
} else {
    $search = '';
}

$query = 'SELECT * ';
$query .= ' FROM instructions';
$query .= " WHERE title LIKE '%{$search}%'";
$query .= " OR description LIKE '%{$search}%'";
$query .= " OR materials LIKE '%{$search}%'";
$query .= " OR instructions LIKE '%{$search}%'";
$results = mysqli_query($db_connection, $query);


// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $instructions_results = true;
} else {
    $instructions_results = false;
}

?>

      <?php include_once __DIR__ . '/../_components/headspace.php';?>
        <h1 class="text-xl font-semibold text-gray-900">Search Results</h1>
        <form action="<?php echo site_url(); ?>/search" method="GET">
          <input class=" border-black border-2" type="text" name="search" id="search" placeholder="Search"
            value="<?php echo $search; ?>">
          <button type="submit">Search</button>
        </form>
        <h2>You searched for "<?php echo $search; ?>"</h2>
        <?php
        // If no results, echo no results
        if (!$instructions_results) {
            echo '<p>No results found</p>';
        }
?>
        <?php
// If error query param exist, show error message
  if (isset($_GET['error'])) {
      echo '<p class="text-red-500">' . $_GET['error'] . '</p>';
  }?>


<div class="all-origami">
    <?php
        $site_url = site_url();

    // If we have results, show them

      if ($instructions_results) {
          while ($instructions_results = mysqli_fetch_assoc($results)) {
            echo "
            <a href='{$site_url}/detail.php?id={$instructions_results['id']}' class='instructions-link'>
                <div class='cards all-origami'>
                    <img class='cards-img' src='{$site_url}/{$instructions_results['image']}' alt=''>                
                    <div class=''>
                        <p class='title-txt'>{$instructions_results['title']}</p>
                        <p class='level-txt'> Level: {$instructions_results['level']}</p>
                    </div> 
                </div>
            </a>    
                        ";
          }
      }
?>
</div>





<?php include_once __DIR__ . '/../_components/footer.php';
?>