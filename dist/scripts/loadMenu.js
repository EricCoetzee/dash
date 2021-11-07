document.addEventListener("DOMContentLoaded", function (event) {
  let items = document.querySelectorAll('.list__item-link'); 
  
  // items.forEach(element => {
  for (let index = 0; index < items.length; index++) {
    const queryString = window.location.search;
       
    if (queryString) {
      console.log(queryString)
      document.querySelector(".".queryString).addEventListener('click', function () {
        
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

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
          if (this.readyState == 4 && this.status == 200) {
            document.querySelector(".details__recent-activities").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "./ajax/call" + index + ".php", true);
        xhttp.send();
      });
    }
  }
  // });
  // *********************************************


});


