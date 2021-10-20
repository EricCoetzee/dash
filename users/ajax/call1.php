<?php include('../../includes/db/init.php') ?>
<div class="details__recent-activities">
    <div class="details__recent-activities__header">
        <h2 class="heading-secondary">Recent Post</h2>
        <a href="" class="bttn bttn--main">View All</a>
    </div>
    <table class="details__recent-activities__table">
        <thead class="details__recent-activities__table__head">
            <tr class="details__recent-activities__table__head__row">
                <td class="td details__recent-activities__table__head__row--heading">Title</td>
                <td class="td details__recent-activities__table__head__row--heading">Likes</td>
                <td class="td details__recent-activities__table__head__row--heading">Comments</td>
                <td class="td details__recent-activities__table__head__row--heading">Status</td>
            </tr>
        </thead>
        <tbody class="details__recent-activities__table__body">
            <?php
             $db = new Database();
             $getRows = $db->getRows("SELECT * FROM forms ORDER BY date DESC");
             foreach ($getRows as $row) {
            ?>
                <tr class="details__recent-activities__table__body__row">
                    <td class="td details__recent-activities__table__body__row--info"><?php echo $row['title']; ?></td>
                    <td class="td details__recent-activities__table__body__row--info"><?php echo $row['comment_count']; ?></td>
                    <td class="td details__recent-activities__table__body__row--info"><?php echo $row['post_likes']; ?></td>
                    <td class="td details__recent-activities__table__body__row--info"><span class="status pending"><?php echo ucfirst($row['status']); ?></span></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>