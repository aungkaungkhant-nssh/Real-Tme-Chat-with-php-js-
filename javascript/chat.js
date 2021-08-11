//variable
const form =document.querySelector(".typing-area");
const sendMessage=document.querySelector(".typing-area button")
const messages=document.getElementById("messages");
const outgoing=document.getElementById("outgoing");
const incomming=document.getElementById("incomming");
const chatbox=document.querySelector(".chat-box");
//prevent default
form.addEventListener("submit",()=>{
    event.preventDefault();
})
//send message
sendMessage.addEventListener("click",()=>{
    fetch("./php/sendMessage.php",{
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
       messages.value=""
    })
    .catch((error)=>{
        console.log(error)
    })
})
chatbox.addEventListener("mouseover",()=>{
    chatbox.classList.add("active")
})
chatbox.addEventListener("mouseleave",()=>{
    chatbox.classList.remove("active")
})
///get Message
setInterval(() => {
    fetch("./php/getMessage.php",{
        method:"POST",
        headers:{
            "Content-Type":'application/x-www-form-urlencoded;',
        },
        body:"&outgoing="+outgoing.value+"&incomming="+incomming.value
    })
    .then((response)=>{
        return response.text();
    })
    .then((data)=>{
    
        chatbox.innerHTML=data;
        if(!chatbox.classList.contains("active")){
            scrollToBottom()
        }
       
        
    })
    .catch((error)=>{
        console.log(error)
    })
}, 500);

function scrollToBottom(){
    chatbox.scrollTop=chatbox.scrollHeight;
}










        // fetch("php/getMessage.php")
        // .then((response)=>{
        //    return response.text()
        // })
        // .then((data)=>{
        //     console.log(data)
        // })
        // .catch((error)=>{
        //     console.log(error.message)
        // })
