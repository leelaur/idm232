<?php

include_once __DIR__ . '/../../app.php';
$page_title = 'Edit Instructions';
include_once __DIR__ . '/../../_components/header.php';
?>
<?php include_once __DIR__ . '/../../_components/headspace.php';?>

<?php
// get users data from database
$query = "SELECT * FROM instructions WHERE id = {$_GET['id']}";
$result = mysqli_query($db_connection, $query);
if ($result-> num_rows > 0) {
    // Get row from results and assign to $user variable;
    $instructions = mysqli_fetch_assoc($result);
} else {
    $error_message = 'Instructions do not exist';
    // redirect_to('/admin/users?error=' . $error_message);
}

?>

<div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <form action="<?php echo site_url(); ?>/_includes/process-create-instructions.php" method="POST">
              <div class="block">
                <label for="">Title</label>
                <input class="border-black border-2" type="text" name="title" value="<?php echo $instructions ['title']?>">
              </div>

              <div class="block">
                <label for="">Description</label>
                <br>
                <input class=" js-tinymce border-black border-2" type="text" name="description"
                value="<?php echo $instructions ['description']?>">
              </div>


              <div class="block">
                <label for="">Materials</label>
                <br>
                <input class=" js-tinymce border-black border-2" type="text" name="materials"
                value="<?php echo $instructions ['materials']?>">
              </div>

              <div class="block">
                <label for="">Instructions</label>
                <br>
                <input class=" js-tinymce border-black border-2" type="text" name="instructions"
                value="<?php echo $instructions ['instructions']?>">
              </div>

              <input class=" nline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4
                  py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2
                  focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto" type="submit" value="Submit">

              <input type="hidden" name="id" value="<?php echo $instructions['id']?>">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once __DIR__ . '/../../_components/footer.php';