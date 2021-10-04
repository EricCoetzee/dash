<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard || Redesigned</title>
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <section class="admin-container">
        <!-- Navigation Menu -->
        <nav class="navigation">
            <ul class="list">
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon-svg" viewBox="0 0 96.71 90.26">
                                <defs>
                                    <style>
                                        .BG03-cls-1 {
                                            fill: #672b82;
                                        }
                                        .BG03-cls-2 {
                                            fill: #672b82;
                                        }
                                        .BG03-cls-3 {
                                            fill: #f1ba33;
                                        }
                                        .BG03-cls-5 {
                                            fill: #672b82;
                                        }
                                        .BG03-cls-4 {
                                            fill: #f1ba33;
                                        }
                                        .BG03-cls-5 {
                                            font-size: 6.27px;
                                            font-family: Gotham-Medium, Gotham;
                                            font-weight: 500;
                                        }
                                        .BG03-cls-6 {
                                            letter-spacing: -.04em;
                                        }
                                    </style>
                                </defs>
                                <g data-name="Layer 2">
                                    <g data-name="Layer 3">
                                        <path class="BG03-cls-3" d="M10.09,0V44.16h7.47L10.09,55,29.45,44.16H96.71V0Zm33,1.87h6.33l8,19.23H50.5l-1-2.57H42.81l-1,2.57H35ZM23.37,18.42,19,11.63V21.1H12.74V2h6.65l4.09,6.71L27.57,2h6.66V21.1H27.87V11.63l-4.39,6.79Zm21,10H38.72V42.11H32.34V28.42H26.73V23H44.34Zm7.88,13.69H45.84V23h6.38Zm23.72,0H69.59V32.65L65.2,39.44h-.11L60.7,32.65v9.46H54.45V23h6.66l4.09,6.71L69.29,23h6.65Zm-6-21L66.23,15,64.6,17V21.1H58.22V2H64.6V9.15L70,2h7.42L70.79,10.3l6.79,10.8Zm24.57,21H78.12V23H94.4v5.24h-10v1.93h9.33V34.8H84.39v2.07H94.54Zm0-21H78.12V2H94.4V7.24h-10V9.18h9.33v4.61H84.39v2.07H94.54Z"></path>
                                        <!-- <rect class="BG03-cls-4" width="8.33" height="44.01"></rect>
                                        <text class="BG03-cls-5" transform="translate(6.61 42.3) rotate(-90)">I PLEDGE<tspan class="BG03-cls-6" x="32.04" y="0">T</tspan>
                                            <tspan x="35.86" y="0">O</tspan>
                                        </text> -->
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="list__item-link--title">
                            MakeTime
                        </span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="home-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">Dashboard</span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="grid-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">View Posts</span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="create-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">Create Posts</span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="notifications-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">Notifications</span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="help-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">Help</span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="settings-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">Settings</span>
                    </a>
                </li>
                <li class="list__item">
                    <a href="" class="list__item-link">
                        <span class="list__item-link--icon">
                            <ion-icon class="icon-icon" name="log-out-outline"></ion-icon>
                        </span>
                        <span class="list__item-link--title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Main sections -->
        <main class="main">
            <div class="topbar">
                <div class="topbar--toggle">
                    <ion-icon class="icon-icon" name="menu-outline"></ion-icon>
                </div>
                <!-- Search -->
                <div class="search">
                    <label class="search--label" for="">
                        <input type="text" class="search--input" placeholder="Search Here" name="" id="">
                        <ion-icon class="icon-icon" name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- User Image -->
                <div class="user-img">
                    <img src="./img/user.jpg" class="user-img--img" alt="">
                </div>
            </div>
            <!-- Cards -->
            <div class="card-box">
                <div class="card-box__card">
                    <div class="card-box__card__info">
                        <div class="card-box__card__info--number">
                            1,344
                        </div>
                        <div class="card-box__card__info--name">
                            Daily Views
                        </div>
                    </div>
                    <div class="card-box__card__info--icon">
                        <ion-icon class="icon-icon" name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card-box__card">
                    <div class="card-box__card__info">
                        <div class="card-box__card__info--number">
                            80
                        </div>
                        <div class="card-box__card__info--name">
                            Impersonations
                        </div>
                    </div>
                    <div class="card-box__card__info--icon">
                        <ion-icon class="icon-icon" name="bar-chart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card-box__card">
                    <div class="card-box__card__info">
                        <div class="card-box__card__info--number">
                            20
                        </div>
                        <div class="card-box__card__info--name">
                            Comments
                        </div>
                    </div>
                    <div class="card-box__card__info--icon">
                        <ion-icon class="icon-icon" name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="card-box__card">
                    <div class="card-box__card__info">
                        <div class="card-box__card__info--number">
                            5
                        </div>
                        <div class="card-box__card__info--name">
                            Connections
                        </div>
                    </div>
                    <div class="card-box__card__info--icon">
                        <ion-icon class="icon-icon" name="person-add-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="details">
                <!-- Status List -->
                <div class="details__recent-activities">
                    <div class="details__recent-activities__header">
                        <h2 class="secondary-heading">Recent Post</h2>
                        <a href="" class="link-btn">View All</a>
                    </div>
                    <table class="details__recent-activities__table">
                        <thead class="details__recent-activities__table__head">
                            <tr class="details__recent-activities__table__head__row">
                                <td class="td details__recent-activities__table__head__row--heading">Name</td>
                                <td class="td details__recent-activities__table__head__row--heading">Likes</td>
                                <td class="td details__recent-activities__table__head__row--heading">Comments</td>
                                <td class="td details__recent-activities__table__head__row--heading">Status</td>
                            </tr>
                        </thead>
                        <tbody class="details__recent-activities__table__body">
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status pending">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status delivered">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status inprogress">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status returned">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status inprogress">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status delivered">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status pending">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status returned">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status delivered">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status pending">Item 4</span></td>
                            </tr>
                            <tr class="details__recent-activities__table__body__row">
                                <td class="td details__recent-activities__table__body__row--info">Item 1</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 2</td>
                                <td class="td details__recent-activities__table__body__row--info">Item 3</td>
                                <td class="td details__recent-activities__table__body__row--info"><span class="status delivered">Item 4</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- New Connections -->
                <div class="details__recent-connections">
                    <div class="details__recent-connections__header">
                        <h2 class="secondary-heading">Recent Connections</h2>
                    </div>
                    <table class="details__recent-connections__table">
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                        <tr class="details__recent-connections__table__row">
                            <td width="60px" class="details__recent-connections__table__row__data">
                                <div class="details__recent-connections__table__row__data__img-box">
                                    <img class="details__recent-connections__table__row__data__img-box--img" src="./img/user.jpg" alt="user-image">
                                </div>
                            </td>
                            <td class="details__recent-connections__table__row__data">
                                <h4>David<span>Italy</span></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        // Toggle Buton
        let toggle = document.querySelector('.topbar--toggle');
        let navigator = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        toggle.onclick = function() {
            navigator.classList.toggle('active');
            main.classList.toggle('active');
        }
        // Add hovered class in selected list div
        let list = document.querySelectorAll('.list__item');
        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered')
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));
    </script>
</body>
</html>