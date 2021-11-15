<?php include('../../includes/db/init.php') ?>
<?php
if (isset($_COOKIE['EzeeMax']) && isset($_COOKIE['ezeemaxMail']) && isset($_COOKIE['protection'])) {
    $user = $_COOKIE['EzeeMax'];
    $mailer = $_COOKIE['ezeemaxMail'];
    $protection = $_COOKIE['protection'];
} elseif (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
}?>
    <div class="details__recent-activities__header">
        <h2 class="heading-text">Recent Notification</h2>
        <a href="" class="bttn bttn--main">View All</a>
    </div>  
    <table class="details__recent-activities__table">
        <thead class="details__recent-activities__table__head">
            <tr class="details__recent-activities__table__head__row">
                <td class="td details__recent-activities__table__head__row--heading">Type</td>
                <td class="td details__recent-activities__table__head__row--heading">Author</td>
                <td class="td details__recent-activities__table__head__row--heading">About</td>
                <td class="td details__recent-activities__table__head__row--heading">Date</td>
                <td class="td details__recent-activities__table__head__row--heading"></td>
            </tr>
        </thead>
        <tbody class="details__recent-activities__table__body">
            <?php
                $db = new Database();
                $getRows = $db->getRows("SELECT * FROM `comments` WHERE `post_author` = 'EzeeMax' ORDER BY `date` DESC LIMIT 15");
                if (count($getRows) > 0) {
                    foreach ($getRows as $i) { 
                        if ($i['type'] === 'comment') {
                            $notification = "../users/comments";
                        } elseif ($i['type'] === 'connection') {
                            $notification ="../users/connections";
                        } elseif ($i['type'] === 'appointment') {
                            $notification = "../users/appointments";
                        } 
                    if ($i['type'] === 'comment') {
                        $author = $i['comment_author'];
                        $db = new Database();
                        $getRow = $db->getRow("SELECT * FROM `users` WHERE username = '$author'");
                        $author_img = $getRow['img'];
                    } elseif ($i['type'] === 'connection') {
                        $author = $i['connection'];
                        $author_img = 'userImage.png';
                    } elseif ($i['type'] === 'appointment') {
                        $author = $i['comment_author'];
                        $author_img = 'userImage.png';
                    }
                    ?>
                <tr class="details__recent-activities__table__body__row">
                    <td class="td details__recent-activities__table__body__row--info"><?php echo ucfirst($i['type']); ?></td>
                    <td class="td details__recent-activities__table__body__row--info"><img class="details__recent-activities__table__body__row--info-img" src="../../img/<?php echo $author_img ?>"></td>
                    <?php if ($i['comment_id'] > 0) { ?>
                    <td class="td details__recent-activities__table__body__row--info">
                    <?php
                    $the_commented_post = $i['comment_post_id'];
                    $db = new Database();
                    $getRow = $db->getRow("SELECT * FROM `forms` WHERE post_id = '$the_commented_post'");
                    ?>
                    <?php
                        if ($i['type'] === 'comment') {
                            if ($i['comment_author'] === "EzeeMax") {
                                echo "You just commented on " . substr($getRow['title'], 0, 20);
                            } else {
                                echo ucwords($i['comment_author']) . " just commented on " . substr($getRow['title'], 0, 20);
                            }
                        } elseif ($i['type'] === 'connection') {
                            echo  "You have a new connection " . ucwords($i['connection']);
                        } elseif ($i['type'] === 'appointment') {
                            echo  "You have a new appointment on " . ucwords($i['appointment_date']);
                        }
                        ?>
                    </td>
                    <td class="td details__recent-activities__table__body__row--info"><?php echo date('F j, Y, g:i a', strtotime($i['date'])) ?></td>
                    <td class="td details__recent-activities__table__body__row--info"><a href="<?php echo $notification?>"><span class="status <?php if ($i['viewed'] == 'no') { echo "delivered"; }else{echo "inprogress";} ?>">View</span></a></td>
                </tr>
            <?php } } }?>
        </tbody>
    </table>