<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Create Instructions';
include_once __DIR__ . '/../../_components/header.php';
?>

<?php include_once __DIR__ . '/../../_components/headspace.php';?>

<?php
// get users data from database
$query = 'SELECT * FROM instructions';
$result = mysqli_query($db_connection, $query);

?>

<div class="mx-auto my-16 max-w-7xl px-4">
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900 title">Create Origami Instructions</h1>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-create-instructions.php" method="POST">
              <div class="block">
                <label for="">Title</label>
                <input class="border-black border-2" type="text" name="title">
              </div>

              <div class="block">
                <label for="">Level</label>
                <br>
                <input class="border-black border-2" type="text" name="level">
              </div>

              <div>
                <label for="">Image</label>
                  <input class="border-black border-2" type="text" name="image">
              </div>

              <div class="block">
                <label for="">Description</label>
                <br>
                <br>
                <textarea class="js-tinymce border-black border-2" name="description"></textarea>
              </div>


              <div class="block">
                <label for="">Materials</label>
                <br>
                <textarea class=" js-tinymce border-black border-2" name="materials"></textarea>
              </div>

              <div class="block">
                <label for="">Instructions</label>
                <br>
                <textarea class=" js-tinymce border-black border-2" name="instructions"></textarea>
              </div>

              <input
                class="nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                type="submit" value="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include_once __DIR__ . '/../../_components/footer.php';