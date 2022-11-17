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
  <!-- Tiny MCE -->
  <script src="https://cdn.tiny.cloud/1/5rxco78d39v79dhusm8wetpmv7dotwi77v126nbjgkcsiuv1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <link rel="icon" type="image/x-icon" href="<?php echo site_url(); ?>/dist/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo site_url(); ?>/dist/styles/style.css">
  <title><?php echo $document_title ; ?></title>
</head>

<body>

  <!-- Main Content Begins -->
  <?php include __DIR__ . '/main-nav.php'; ?>
