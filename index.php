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
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="logo-apple"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">E-NFT</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="home-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">Dashboard</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="grid-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">View Posts</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="create-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">Create Posts</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="notifications-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">Notifications</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="help-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">Help</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="settings-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">Settings</span>
                    </a>
                </li>
                <li class="navigation__list__item">
                    <a href="" class="navigation__list__item-link">
                        <span class="navigation__list__item-link--icon">
                            <ion-icon class="icon-icon" name="log-out-outline"></ion-icon>
                        </span>
                        <span class="navigation__list__item-link--title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <main class="main">
            <div class="main__topbar">
                <div class="main__topbar--toggle">
                    <ion-icon class="icon-icon" name="menu-outline"></ion-icon>
                </div>
                <!-- Search -->
                <div class="main__search">
                    <label class="main__search--label" for="">
                        <input type="text" class="main__search--input" placeholder="Search Here" name="" id="">
                        <ion-icon class="icon-icon" name="search-outline"></ion-icon>
                    </label>
                </div>
                <!-- User Image -->
                <div class="main__user-img">
                    <img src="./img/user.jpg" class="main__user-img--img" alt="">
                </div>
            </div>
        </main>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        // Add hovered class in selected list div
        let list = document.querySelectorAll('.navigation__list__item');

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