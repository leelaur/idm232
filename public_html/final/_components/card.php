<?php
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result)) {
        echo "
        <a href='{$site_url}/detail.php?id={$instructions['id']}' class='instructions-link'>
            <div class='cards all-origami'>
                <img class='cards-img' width='100px' height='100px' src='{$instructions['image']}' alt=''>                
                <div class=''>
                    <p class='title-txt'>{$instructions['title']}</p>
                    <p class='level-txt'> Level: {$instructions['level']}</p>
                </div> 
            </div>
        </a>    
        ";
    }
?>