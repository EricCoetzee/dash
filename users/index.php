<?php include('../includes/db/init.php') ?>
<!DOCTYPE html>
<html lang="en">
<?php $username = 'admin'; ?>
<head>
    <?php include('./includes/head.php') ?>
    <script src="../dist/scripts/loadMenu.js"></script>
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
                <?php include('./includes/dash/status_list.php') ?>
                <!-- New Connections -->
                <?php include('./includes/dash/new_connections.php') ?>
            </div>
        </main>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="../dist/scripts/dash.js"></script>
    <script src="../dist/scripts/mulForm.js"></script>
</body>

</html>