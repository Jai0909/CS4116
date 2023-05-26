const form = document.querySelector(".typing-area"),
inputField = form.querySelector(".input-field"), 
sendBtn = form.querySelector("button"),
chatBox = document.querySelector(".chat-box"); 

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
}

sendBtn.onclick =  ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-exchange.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = ""; //once message inserted into databse then leave blank the input field
                scrollToBottom();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-exchange.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}, 500); //this function will run frequently after 500ms

function scrollToBottom(){
    chatBox.scrollTo = chatBox.scrollHeight;

}