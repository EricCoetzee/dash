<div class="details__recent-connections">
    <div class="details__recent-connections__header">
        <h2 class="heading-secondary">Recent Connections</h2>
    </div>
    <table class="details__recent-connections__table">
    <?php
     $username = 'admin';
     $db = new Database();
     $getRows = $db->getRows("SELECT * FROM comments WHERE type = 'connection' AND post_author = '$username ' ORDER BY date DESC");
     foreach ($getRows as $row) {
    ?>
        <tr class="details__recent-connections__table__row">
            <td width="60px" class="details__recent-connections__table__row__data">
                <div class="details__recent-connections__table__row__data__img-box">
                    <?php
                         $db = new Database();
                         $getRow = $db->getRow("SELECT * FROM users WHERE username = '$username'");
                    ?>
                    <img class="details__recent-connections__table__row__data__img-box--img" src="../img/<?php echo $getRow['img']; ?>" alt="user-image">
                </div>
            </td>
            <td class="details__recent-connections__table__row__data">
                <h4><?php echo ucfirst($row['connection']); ?><span><?php echo date("j M, Y", strtotime($row['date']))?></span></h4>
            </td>
        </tr>
    <?php } ?>
    </table>
</div>