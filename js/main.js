const form=document.querySelector("form")
let formstatus=document.querySelector(".btn-submit span")
formstatus.style.color="#0d6efd";
form.onsubmit = (e) => {
    e.preventDefault();
    let xhr=new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.onload = () => {
        
        if(xhr.readyState == 4 && xhr.status == 200) {
            let response=xhr.response;
            console.log(response);
            if(response.indexOf("Email And Password are Require") != -1 || response.indexOf("Enter A validate Email") != -1 || response.indexOf("Sorry, Failed to send Email") != -1 ) {
                formstatus.style.color="red";
            } else {
                form.reset();
                setTimeout(() => {
                    formstatus.style.display="none";
                }, 3000)
            }
            formstatus.innerHTML=response;
        }
    }
    let formdata=new FormData(form);
    xhr.send(formdata);
}