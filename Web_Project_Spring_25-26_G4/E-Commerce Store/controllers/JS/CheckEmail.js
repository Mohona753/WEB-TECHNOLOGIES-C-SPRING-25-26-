function CheckEmail() {

    var email = document.getElementById("email").value;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = this.responseText.trim();
            var el = document.getElementById("erroremail");
            el.innerHTML = response;

            if (response === "Email Available") {
                el.style.color = "green";
            } else {
                el.style.color = "red";
            }
        }
    };

    xhttp.open("POST", "../../controllers/CheckEmail.php", true);
    xhttp.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhttp.send("email=" + encodeURIComponent(email));
}