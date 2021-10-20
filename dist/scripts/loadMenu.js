document.addEventListener("DOMContentLoaded", function (event) {
   let items = document.querySelectorAll('.list__item-link');
    // items.forEach(element => {
    for (let index = 0; index < items.length; index++) {
        const element = items[index];
        itemVal = element.value;
        if (itemVal) {
            document.querySelector('.' + itemVal).addEventListener('click', function () {
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "./ajax/call"+index+".php", true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var response = this.responseText;
                        document.querySelector('.details__recent-activities').innerHTML = response;
                    }
                };
                var data = 'itemVal=' + itemVal;
                xhttp.send(data);
            });
        }
    }
    // });
    // *********************************************
});
