const pswrdField=document.querySelector(".form input[type='password']");
let toggleBtn=document.querySelector(".form .field i");

toggleBtn.addEventListener("click",()=>{
    if(pswrdField.type==="password"){
        pswrdField.type="text";
        toggleBtn.classList.add("active")
    }else{
        pswrdField.type="password";
        toggleBtn.classList.remove("active")
    }
})