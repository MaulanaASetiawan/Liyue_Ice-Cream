const checkbox = document.getElementById("checkbox");
const bg = document.getElementById('isi-1'); 

checkbox.addEventListener("change", () => {
    document.body.classList.toggle("dark");
    bg.classList.toggle('bgdark');
    bg.classList.toggle('reverse');
});