var mesazhiDiv = document.getElementById("error-message");

var btn = document.getElementById("btnSub");

function validoKushtin(e){
    var emri = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mesazhi = document.getElementById("message").value;

   if(emri == "" || email == "" || mesazhi == ""){
    e.preventDefault();
    document.getElementById("error-message").innerHTML = '<p>Duhet ti plotesoni te gjitha fushat!</p>';
    document.getElementById("error-message").style.color = "red";
    }
else if (!validateEmail(email)){
    e.preventDefault();
    document.getElementById("error-message").innerHTML = '<p>Futni nje email valid</p>';
    document.getElementById("error-message").style.color = "red";
}else{
    e.preventDefault();
    document.getElementById("error-message").style.color = "green";
   document.getElementById("error-message").innerHTML = '<p>Fusha juaj eshte plotesuar me sukses.</p>';
   }


}
btn.addEventListener("click", validoKushtin);

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }