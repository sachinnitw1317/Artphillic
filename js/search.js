function sethint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "http://localhost/artphilic/search?q=" + str, true);
        xmlhttp.send();
    }
}
setInterval(function()
  {
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("noti_tray").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "notification.php", true);
        xmlhttp.send(); 
  },5000);
setInterval(function()
  {
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("noti_num").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "notification_num.php", true);
        xmlhttp.send(); 
  },5000);