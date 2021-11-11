document.addEventListener("DOMContentLoaded", function (event) {
  let items = document.querySelectorAll('.list__item-link');
  // const queryString = window.location.search;
  const url_string = window.location.pathname;
  // const url = new URL(url_string);
  // const urlParams = new URLSearchParams(queryString);
  // console.log(queryString)
  const page = url_string.split("/").pop();
  // const page = urlParams.get("page")
  // items.forEach(element => {

  console.log(page);
    if(page === 'create_post'){
      document.querySelector("."+ page).classList.add('hovered');
      document.querySelector("."+ page+"--link").style.cursor = "default";
      document.querySelector("."+ page+"--link").href = "javascript:void(0)";
      document.querySelector("."+ page+"--link").style.textDecoration = "line-through";
      document.querySelector("."+ page+"--link").style.textDecorationThickness = "20%";
      document.querySelector("."+ page+"--title").style.fontWeight = "900";
    }
  for (let index = 1; index < items.length - 2; index++) {
    if (page !== 'create_post') {
      document.body.addEventListener("onload", showResult(page), false);
      function showResult(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".details__recent-activities").innerHTML = this.responseText;
            document.querySelector("."+ page).classList.add('hovered');
            document.querySelector("."+ page+"--link").style.cursor = "default";
            document.querySelector("."+ page+"--link").href = "javascript:void(0)";
            document.querySelector("."+ page+"--link").style.textDecoration = "line-through";
            document.querySelector("."+ page+"--link").style.textDecorationThickness = "20%";
            document.querySelector("."+ page+"--title").style.fontWeight = "900";

          }
        }
        xmlhttp.open("GET", "../ajax/call_" + page + ".php", true);
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


