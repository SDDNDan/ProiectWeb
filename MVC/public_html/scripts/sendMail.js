function send() {
    let msg = document.getElementById("msg");
    let email = document.getElementById("email").value;
    let name = document.getElementById("name").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "/ProjectWeb/MVC/public_html/contact/sendMail", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("email=" + email + "&name=" + name + "&subject=" + subject + "&message=" + message);
    console.log("succ");
    msg.style.display="block";
    msg.textContent="Mesaj trimis cu succes!";
}

let sendButton = document.getElementById("submit");
sendButton.addEventListener("click", function(){
    send();
});
