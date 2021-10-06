<div class="topbar">
    <?php include('./includes/topbar/toggle.php'); ?>
    <!-- Search -->
    <div class="search-engine-container">
        <div class="search-engine">
            <div class="search">
                <script src="../dist/scripts/ajax.js"></script>
                <?php include_once('./includes/topbar/search.php'); ?>
            </div>
        </div>
    </div>
    <!-- User Image -->
    <div class="user-img">
        <?php
        $db = new Database();
        $getRow = $db->getRow("SELECT * FROM users WHERE username = '$username'");
        ?>
        <img src="../img/<?php echo $getRow['img']; ?>" class="user-img--img" alt="">
    </div>
</div>