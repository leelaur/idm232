<?php
include_once __DIR__ . '/../app.php';
$page_title = 'Services';
include_once __DIR__ . '/../_components/header.php';
$services = get_instructions();



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
// var_dump($search);
// die();

// Check if was have more than 0 results from db
if ($results->num_rows > 0) {
    $instructions_results = true;
} else {
    $instructions_results = false;
}

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
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
    </div>

    <?php
    // If we have results, show them
      if ($instructions_results) {
          while ($instructions_results = mysqli_fetch_assoc($results)) {
              echo '<div class="flex flex-row justify-center items-center">';
              echo '<h2>' . $instructions_results['title'] . ' ' . $instructions_results['description'] . '</h2>';
              echo '</div>';
          }
      }
?>

  </div>
</div>



<?php include_once __DIR__ . '/../_components/footer.php';
?>