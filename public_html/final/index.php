<?php
include_once __DIR__ . '/app.php';
$page_title = 'Home';
include_once __DIR__ . '/_components/header.php';
?>

<main>
         <div class="search wrapper">
            <div class="search-img--center">
                <img src="dist/images/search-img.png" class="search-img">
                <form action="<?php echo site_url(); ?>/search" method="GET"class="search-bar" id="form"> 
                    <input type="search" placeholder="Search..." class="search-box"name="search">
                    <button class="search-button">Search</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="category-entire wrapper">
            <div class="instruction">
                <h3 class="featured-title"> Featured Origami Instructions</h3>    
                <div class="all-origami">              
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img" />
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img"/>
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img"/>
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img"/>
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img"/>
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img"/>
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                    <div class="origami-instruction">
                        <img src="https://via.placeholder.com/400x300" class="origami-img" />
                        <h5>Christmas Tree</h5>
                        <p> Skill: Easy</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

<?php include_once __DIR__ . '/_components/footer.php';