<?php
if (!isset($instructions)) {
    echo '$instructions variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name
      </th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Image</th>
      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($sinstructions_row = mysqli_fetch_array($instructions)) {
    echo "
          <tr>
            <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$instructions['id']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['title']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['image']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['description']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['materials']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$instructions['instructions']}</td>
            <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'><img src='{$site_url}{$instructions['image_path']}' alt=''></td>
            <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
              <a href='{$site_url}/admin/instructions/edit.php?id={$instructions['id']}' class='text-indigo-600 hover:text-indigo-900'>Edit</a>
              <a href='{$site_url}/admin/instructions/delete.php?id={$instructions['id']}' class='text-indigo-600 hover:text-indigo-900'>Delete</a>
            </td>
          </tr>";
}
?>
  </tbody>
</table>