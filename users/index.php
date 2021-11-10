<?php include('../includes/db/init.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php $username = 'admin'; ?>

<head>
    <?php include('./includes/head.php') ?>
    <script src="../../dist/scripts/loadMenu.js"></script>
    <script src="../../dist/scripts/mulForm.js"></script>
</head>

<body>
    <section class="admin-container">
        <!-- Navigation Menu -->
        <?php include('./includes/nav.php') ?>
        <!-- Main sections -->
        <main class="main">
            <?php include('./includes/top_bar.php') ?>
            <!-- Cards -->
            <?php include('./includes/dash/dash_cards.php') ?>
            <div class="details">
                <!-- Status List -->
                <?php
                    include('./includes/dash/status_list.php');
                    if (isset($_GET['delete'])) {
                        $delete_class = trim($_GET['delete']);
                        echo 'raw';
                        $db = new Database();
                        $getRow = $db->getRow("SELECT * FROM forms WHERE post_id = $delete_class");
                        $image1 =  $getRow['img_one'];
                        $image2 =  $getRow['img_two'];
                        $image3 =  $getRow['img_three'];
                        $image4 =  $getRow['img_four'];
                        $image5 =  $getRow['img_five'];
                        $image6 =  $getRow['img_six'];
                        if ($image1 == true) {
                            $imgDlt = "../img/" . $image1;
                            unlink($imgDlt);
                        }
                        if ($image2 == true) {
                            $imgDlt = "../img/" . $image2;
                            unlink($imgDlt);
                        }
                        if ($image3 == true) {
                            $imgDlt = "../img/" . $image3;
                            unlink($imgDlt);
                        }
                        if ($image4 == true) {
                            $imgDlt = "../img/" . $image4;
                            unlink($imgDlt);
                        }
                        if ($image5 == true) {
                            $imgDlt = "../img/" . $image5;
                            unlink($imgDlt);
                        }
                        if ($image6 == true) {
                            $imgDlt = "../img/" . $image6;
                            unlink($imgDlt);
                        }
                        $deleteRow = $db->deleteRow("DELETE FROM comments WHERE comment_post_id = $delete_class");
                        $deleteRow = $db->deleteRow("DELETE FROM forms WHERE post_id = $delete_class");
                        header('Location: ./view_post');
                    }

                ?>
                <!-- New Connections -->
                <?php include('./includes/dash/new_connections.php') ?>
            </div>
        </main>
    </section>
    <script src="../../dist/scripts/dash.js"></script>
</body>

</html>