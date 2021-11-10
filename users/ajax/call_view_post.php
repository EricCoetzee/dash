<?php include('../../includes/db/init.php') ?>
<div class="post-view-container">
    <div class="details__recent-activities__header">
        <h2 class="heading-secondary">Recent Post</h2>
        <a href="" class="bttn bttn--blue">View All</a>
    </div>
    <?php
    $user = 'EzeeMax';
    function die_rview($value)
    {
        foreach ($value as $row) {
            $image = $row['img_one'];
            if ($image == null || $image == false) {
                $image = 'image.png';
            }
            $date_only = explode(" ", $row['date']);
    ?>
            <figure class="post">
                <a href="../../posts/post/<?php echo $row['post_id']; ?>" class="post__hero">
                    <img src="../../img/<?php echo $image; ?>" alt="post cover image" class="post__img">
                    <span class="post__img-caption">View Post</span>
                </a>
                <div class="post__info">
                    <div class="post__cat-date">
                        <?php
                        $category = $row['category'];
                        ?>
                        <div class="post__category"><?php echo $category;  ?></div>
                        <div class="post__date">Post on
                            <svg class="post__date-icon">
                                <use xlink:href="../../img/svg/sprite.svg#icon-calendar1"></use>
                            </svg>
                            <?php echo date("j M, Y", strtotime(reset($date_only))); ?> at
                            <svg class="post__time-icon">
                                <use xlink:href="../../img/svg/sprite.svg#icon-clock21"></use>
                            </svg>
                            <?php echo date("H:i", strtotime(end($date_only))); ?>
                        </div>
                    </div>
                    <figcation class="post__details">
                        <h2 class="post__title"><a href="../../posts/post/<?php echo $row['post_id']; ?>" class="post__title-link"><?php echo substr(strtoupper($row['title']), 0, 19);  ?></a></h2>
                        <p class="post__description"><?php echo substr($row['description'], 0, 125); ?></p>
                    </figcation>
                    <div class="post__btn-box">
                        <div class="post__stats">
                            <a <?php echo "onClick=\"javascript: return confirm('Are you sure you want to delete?')\"" ?> class='bttn bttn__min bttn--gradiant' href='view_post?delete=<?php echo $row['post_id'] ?>'> Delete</a>
                        </div>
                        <div class="post__stats">
                            <a class='bttn bttn__min bttn--blue' href='page/edit_post&p_id=<?php echo $row['post_id'] ?>'> Edit</a>
                        </div>
                    </div>
                </div>
            </figure>
    <?php }
    }
    $db = new Database();
    $getRows = $db->getRows("SELECT * FROM forms WHERE username = '$user' ORDER BY DATE DESC LIMIT 2");
    die_rview($getRows);
    $db->Disconnect();
    ?>
</div>