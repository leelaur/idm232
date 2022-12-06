<?php
include_once __DIR__ . '../../app.php';
$page_title = 'Categories';
include_once __DIR__ . '../../_components/header.php';
?>

<body>
    <hr>
    <main>

        <div class="category-entire wrapper instruction-top">
            <menu class="category-menu" id="categories">
                <h4 class="category-menu-title">Categories:</h4>
                <ul class="category-menu-list">
                    <li class="category-list-item"> Origami Animals</li>
                    <li class="category-list-item"> Origami Holiday</li>
                    <li class="category-list-item"> Origami Flowers</li>
                    <li class="category-list-item"> Origami Stars</li>
                    <li class="category-list-item category-list-item--none"> Origami Food</li>
                </ul>
            </menu>
            <div class="instruction ">
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
    <hr>
    <footer>
        <p> Unfolded Origami</p>
        <nav>
            <ul class="footer-menu-list">
                <li class="footer-list-items">Categories</li>
                <li class="">Search</li>
                <li class="">Admin</li>
            </ul>
        </nav>

    </footer>
    <script src="main.js"></script>
</body>
</html>