<div id="myDropdown" onload="dropdownFunction()" class="dropdown-content">


</div>
<!-- Script for Notifications Dropdown from above-->
<script>
    function dropdownFunction() {


        document.getElementById("myDropdown").classList.toggle("show");

        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "./ajax/notification.php", true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.querySelector('.dropdown-content').innerHTML = this.responseText;
            }
        };
        xhttp.send();


    }

    function notification_data() {
        setInterval(() => {
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "./notifications.php", true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.querySelector('.comment-icon__notification').innerHTML = this.responseText;
                }
            };
            xhttp.send();
        }, 800);
    }
    notification_data();
</script>