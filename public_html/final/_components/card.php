<?php
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result)) {
        echo "
        <a href='{$site_url}/detail.php?id={$instructions['id']}' class='instructions-link'>
            <div class='cards all-origami'>
                <img class='cards-img' src='{$site_url}/{$instructions['image']}' alt=''>                
                <div class=''>
                    <p class='title-txt'>{$instructions['title']}</p>
                    <p class='level-txt'> Level: {$instructions['level']}</p>
                </div> 
            </div>
        </a>    
        ";
    }
?>