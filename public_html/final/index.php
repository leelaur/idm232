
<?php include_once 'components/header.php';?>
<?php $title = 'Assignment - 01'; ?>
<h1><?php echo $title; ?></h1>

<?php include_once 'components/footer.php';?>

<?php
  //  Read the data from the database form the users table
  $query = 'SELECT * FROM users';
  $result = mysqli_query($connection, $query);

  // Check there are no errors with our SQL statement
  if (!$result) {
      die('Database query failed.');
  }

  while ($user = mysqli_fetch_array($result)) {
      // echo '<pre>';
      // var_dump($user);
      // echo '</pre>';
      echo '<h2>' . $user['first_name'] . ' ' . $user['last_name'] . '</h2>';
      echo '<hr>';
  }
  die;

  $page_title = 'Home';
  include_once 'components/header.php';

  ?>
