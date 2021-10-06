
function lightbg_clr() {
  document.querySelector('#qu').value = "";
  document.querySelector('#textbox-clr').textContent = "";
  document.querySelector('#search-layer').style.width = "auto";
  document.querySelector('#search-layer').style.height = "auto";
  document.querySelector('#livesearch').style.display = "none";
  document.querySelector("#qu").focus();
};

function fx(str) {
  var s1 = document.getElementById("qu").value;
  s1 = s1.toString();
  if (s1.match(/[']/)) {
    xmlhttp.open("GET", "./ajax/call_ajax.php?n=" + s1, false);
    xmlhttp.send();
  } else {
    var xmlhttp;
    if (str.length == 0) {
      document.getElementById("livesearch").innerHTML = "";
      document.getElementById("livesearch").style.border = "0px";
      document.getElementById("search-layer").style.width = "auto";
      document.getElementById("search-layer").style.height = "auto";
      document.getElementById("livesearch").style.display = "block";
      document.querySelector('#textbox-clr').textContent = "";
      return;
    }
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
        document.getElementById("search-layer").style.width = "100%";
        document.getElementById("search-layer").style.height = "100%";
        document.getElementById("livesearch").style.display = "block";
        document.querySelector('#textbox-clr').textContent = "X";
      }
    }
    xmlhttp.open("GET", "./ajax/call_ajax.php?n=" + s1, true);
    xmlhttp.send();
  }
}

/* ************************************************************************************************************** */
