$(document).ready(function(){

});

function checkUsername(str) {
  var xhttp;
  if (str === "") {
    document.getElementById("username-notification").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("username-notification").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "includes/check_username.php?q="+str, true);
  xhttp.send();
}