const searchBar=document.querySelector('.users .search input');
const searchBtn=document.querySelector(".users .search button");
const userLists=document.querySelector(".users .users-list");
searchBtn.addEventListener("click",()=>{
    searchBar.classList.toggle("active");
    searchBar.focus()
    searchBtn.classList.toggle("active")
})
searchBar.addEventListener("keyup",()=>{
    let searchTerm=searchBar.value;
    if(searchTerm !=""){
        searchBar.classList.add("active");
    }
    fetch("php/search.php",{
        method:"POST",
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded;',
          },
        body:'searchTerm='+searchTerm
    })
    .then((response)=>{
       return response.text();
    })
    .then((data)=>{
       userLists.innerHTML=data;
    })
    .catch((error)=>{
        console.log(error);
    })
})
setInterval(() => {
    fetch("php/users.php")
    .then((response)=>{
        return response.text();
    })
    .then((data)=>{
        if(!searchBar.classList.contains("active")){
            userLists.innerHTML=data
        }
        
      
    })
}, 5000);