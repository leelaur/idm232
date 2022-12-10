<?php
    $site_url = site_url();
    while ($instructions = mysqli_fetch_array($result)) {
        echo "
        <a href='{$site_url}/detail.php?id={$instructions['id']}' class=''>
            <img class='' width='100px' height='100px' src='{$instructions['image']}' alt=''>                
                <div class=''>
                    <p class=''>{$instructions['title']}</p>
                    <p class=''> Level: {$instructions['level']}</p>
                </div> 
        </a>    
        ";
    }
?>