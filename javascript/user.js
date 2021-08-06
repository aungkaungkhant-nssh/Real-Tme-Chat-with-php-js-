const searchBar=document.querySelector('.users .search input');
const searchBtn=document.querySelector(".users .search button");

searchBtn.addEventListener("click",()=>{
    searchBar.classList.toggle("active");
    searchBar.focus()
    searchBtn.classList.toggle("active")
})