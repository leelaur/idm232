<?php
include_once __DIR__ . '../../../app.php';
$page_title = 'Instructions';
include_once __DIR__ . '../../../_components/header.php';
?>
<?php include_once __DIR__ . '../../../_components/headspace.php';?>


<?php
// get users data from database
$query = 'SELECT * FROM instructions';
$result = mysqli_query($db_connection, $query);

?>
<main>
  <div class="">


    <div class="px-4 sm:px-6 lg:px-8">
      <div class="sm:flex sm:items-center">
      
        <div class="sm:flex-auto instructions-text">
          <h1 class="text-xl font-semibold text-gray-900 title">Instructions</h1>
          <p class="mt-2 text-sm text-gray-700 text-center">A list of all the instructions including the title, level, description, etc.
            and role.</p>
           
           <?php
          // If error query param exist, show error message
            if (isset($_GET['error'])) {
                echo '<p class="error">' . $_GET['error'] . '</p>';
            }

  ?>
         
  <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none add-btn">
          <button type="button"
            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto add-inst-btn">
            <a href="<?php echo site_url() . '/admin/instructions/create.php' ?>" class="add-inst-btn--link">
              Add Instructions</a>
            </button>
        </div>
        
        </div>
        
      
      </div>
      
      <div class="mt-8 flex flex-col">
        
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-300">
                
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Level</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>

                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                      <span class="sr-only" >Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                  <?php

  $site_url = site_url();
      while ($instructions = mysqli_fetch_array($result)) {
          echo "<tr>
          <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['id']} </td>
                  <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['title']} </td>
                  <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['level']}</td>
                  <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['description']}</td>
                  <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
                  <div class='edit-btn'>
                  <a href='{$site_url}/admin/instructions/edit.php?id={$instructions['id']}' style='border-bottom: solid; color: black;'>Edit</a>
                  <a href='{$site_url}/admin/instructions/delete.php?id={$instructions['id']}' style='color:red;'>Delete</a>
                  </div>
                  </td>
                </tr>";
      }
  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>

<?php include_once __DIR__ . '../../../_components/footer.php';?>