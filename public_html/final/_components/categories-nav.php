<?php
$navigation_items = [
    [
        'title' => 'Holiday Origami',
        'url' => site_url() . '/categories/holiday.php',
    ],
    [
        'title' => 'Animal Origami',
        'url' => site_url() . '/categories/animal.php',
    ],


];
?>
<div class="mb-8">
  </div>
  <div class="hidden sm:block">
    <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
      <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
      <?php
      foreach ($navigation_items as $nav_item) {
          echo "
          <a href='{$nav_item['url']}' class='text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10'>
            <span>{$nav_item['title']}</span>
          </a>
          ";
      }
?>
    </nav>
  </div>
</div>