<?php

// if $page_title variable doesn't exist, create a default one
if (!isset($page_title)) {
    $page_title = 'Home';
}
$site_title = 'Unfolded Origami';
$document_title = $page_title . ' | ' . $site_title; // Home | Unfolded Origami

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>

  <!-- Main Content Begins -->
  <header>
        <div class="menu">
            <h2> Unfolded Origami </h2>
            <nav>
                <ul class="menu-list">
                    <li class="menu-list-item">Categories</li>
                    <li class="menu-list-item">Search</li>
                    <li class="menu-list-item">Admin</li>
                </ul>
            </nav>
        </div>
    </header>
    <hr>