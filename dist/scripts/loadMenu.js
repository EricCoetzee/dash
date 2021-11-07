document.addEventListener("DOMContentLoaded", function (event) {
  let items = document.querySelectorAll('.list__item-link');
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const page = urlParams.get("page")
  // items.forEach(element => {
  for (let index = 1; index < items.length - 2; index++) {
    
    if (queryString) {
      document.body.addEventListener("onload", showResult(page), false);
      function showResult(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".details__recent-activities").innerHTML = this.responseText;
           
          }
        }
        xmlhttp.open("GET", "./ajax/call_" + page + ".php", true);
        xmlhttp.send();
      }
    }


    // if (queryString) {
    //   document.querySelector('.' + queryString).addEventListener('click', function () {

    // let xhttp = new XMLHttpRequest();
    // xhttp.open("GET", "./ajax/call"+index+".php", true);
    // xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    // xhttp.onreadystatechange = function () {
    //     if (this.readyState == 4 && this.status == 200) {
    //         let response = this.responseText;
    //         document.querySelector('.details__recent-activities').innerHTML = response;
    //     }
    // };
    // let data = 'itemVal=' + itemVal;
    // xhttp.send(data);

    //   xhttp = new XMLHttpRequest();
    //   xhttp.onreadystatechange = function () {
    //     if (this.readyState == 4 && this.status == 200) {
    //       document.querySelector(".details__recent-activities").innerHTML = this.responseText;
    //     }
    //   };
    //   xhttp.open("GET", "./ajax/call" + index + ".php", true);
    //   xhttp.send();
    // });
    // }
  }
  // });
  // *********************************************


});


