const searchBar=document.querySelector('.users .search input');
const searchBtn=document.querySelector(".users .search button");
const userLists=document.querySelector(".users .users-list");
searchBtn.addEventListener("click",()=>{
    searchBar.classList.toggle("active");
    searchBar.focus()
    searchBtn.classList.toggle("active")
})

setInterval(() => {
    fetch("php/users.php")
    .then((response)=>{
        return response.text();
    })
    .then((data)=>{
        userLists.innerHTML=data
      
    })
}, 5000);