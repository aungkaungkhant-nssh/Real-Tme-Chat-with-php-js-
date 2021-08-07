///variable
let form=document.querySelector(".signup form");
let continueBtn=document.querySelector(".button input");
let errorText=document.querySelector("form .error-txt");
//prevent default
form.addEventListener("submit",()=>{
    event.preventDefault()
})

//singn up button
continueBtn.addEventListener("click",()=>{

    //creating xml object
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/signup.php",true)
    xhr.onload=()=>{
        //check read state
        if(xhr.readyState===4){
            //check status
            if(xhr.status===200){
                let data=xhr.response;
                if(data==="success"){
                    location.href="users.php"
                }else{
                    errorText.textContent=data;
                    errorText.style.display="block";

                }
            }
            
        }
    }
    //form data
    let formData=new FormData(form)
    xhr.send(formData)
})