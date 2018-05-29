function send() {
    let email = document.getElementById("email").value;
    let name = document.getElementById("name").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://localhost:8000/ProjectWeb/MVC/public_html/contact/sendMail", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("email=" + email + "&name=" + name + "&subject=" + subject + "&message=" + message);
}

let sendButton = document.getElementById("submit");
sendButton.addEventListener("click", function(){
    send();
});
