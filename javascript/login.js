///variable
let form =document.querySelector(".login form");
let btn=document.querySelector(".button input");
let errorText=document.querySelector("form .error-txt");
//form submit
form.addEventListener("submit",()=>{
    event.preventDefault()
})

//login btn click
btn.addEventListener("click",()=>{
    ///ajax request
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/login.php",true);
    xhr.onload=()=>{
        if(xhr.readyState===4){
            if(xhr.status===200){
                let data=xhr.response;
                if(data==="success"){
                    location.href="users.php";
                }else{
                    errorText.textContent=data;
                    errorText.style.display="block";
                }
            }
           
        }
    }
    let formData=new FormData(form);
    xhr.send(formData);
})