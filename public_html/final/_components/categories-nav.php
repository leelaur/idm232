<?php
$navigation_items = [
    [
      'title' => 'All',
      'url' => site_url() . '/categories/index.php',
    ],
    [
        'title' => 'Beginner',
        'url' => site_url() . '/categories/beginner.php',
    ],
    [
        'title' => 'Intermediate',
        'url' => site_url() . '/categories/intermediate.php',
    ],
    [
        'title' => 'Advanced',
        'url' => site_url() . '/categories/advanced.php',
    ],



];
?>
<div class="mb-8">
  </div>
  <div class="hidden sm:block all-btn">
    <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow level-nav" aria-label="Tabs">
      <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
      <?php

      foreach ($navigation_items as $nav_item) {
          echo "
         <div class='all-level-btn'>
            <a href='{$nav_item['url']}' class='text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium hover:bg-gray-50 focus:z-10 level-link' style='text-decoration:none;color: black;'>
              <span class='level-btn'>{$nav_item['title']}</span>
              
            </a>
          </div>
          ";
      }
?>
    </nav>
  </div>
</div>