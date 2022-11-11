const search=document.querySelector('#form');
const searchText=document.querySelector('#searchInput');


searchText.addEventListener("click", function(){

    search.style.display="block";
    search.classList('menu-list-item');
    searchText.style.display="none";
});


