//variable
const form =document.querySelector(".typing-area");
const sendMessage=document.querySelector(".typing-area button")
const messages=document.getElementById("messages");
const outgoing=document.getElementById("outgoing");
const incomming=document.getElementById("incomming");
//prevent default
form.addEventListener("submit",()=>{
    event.preventDefault();
})
//send message
sendMessage.addEventListener("click",()=>{
    fetch("./php/message.php",{
        method:"POST",
        headers:{
            "Content-Type":'application/x-www-form-urlencoded;',
        },
        body:"message="+messages.value+"&outgoing="+outgoing.value+"&incomming="+incomming.value
    })
    .then((response)=>{
        return response.text();
    })
    .then((data)=>{
        console.log(data)
    })
    .catch((error)=>{
        console.log(error)
    })
})