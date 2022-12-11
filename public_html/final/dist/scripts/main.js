console.log("Script Loaded");


function initTinyMce() {
  tinymce.init({
    selector: ".js-tinymce",
    height: 400,
    menubar: false,
    plugins:
      "anchor autolink  codesample  link lists searchreplace table visualblocks wordcount",
    toolbar:
      "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent |   removeformat",
    content_style:
      "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
  });
}

initTinyMce();


const menuBtn= document.getElementById('menu-img');
const menuItems= document.querySelector('.menu-list');
const closeBtn = document.querySelector('.menu-img-close');


menuBtn.addEventListener ('click', ()=>
{
// alert ('this is an elert');
menuBtn.style.display="none"
menuItems.style.display="block";
closeBtn.style.display="block";
menuItems.classList.add('menu-list-vertical');

});

closeBtn.addEventListener ('click', ()=>
{
// alert ('this is an elert');
menuBtn.style.display="block"
menuItems.style.display="none";
closeBtn.style.display="none";
menuItems.classList.remove('menu-list-vertical');

});

