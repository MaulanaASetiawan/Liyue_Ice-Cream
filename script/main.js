const checkbox = document.getElementById("checkbox");
const nav = document.getElementById("navbar");
const bg = document.getElementById('isi-1'); 
const bekgron = document.getElementById('bekgron');


checkbox.addEventListener("change", () => {
    document.body.classList.toggle("dark");
    nav.classList.toggle("navbardark");
    bg.classList.toggle('bgdark');
    bg.classList.toggle('reverse');
    bekgron.classList.toggle("bekgron_dark");

});