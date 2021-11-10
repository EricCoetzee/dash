<div class="card-box">
    <?php
     $db = new Database();
     $getRows = $db->getRows("SELECT DISTINCT type FROM user_status ORDER BY type DESC");
     foreach ($getRows as $row) {
    ?>
        <div class="card-box__card">
            <div class="card-box__card__info">
                <div class="card-box__card__info--number">
                    <?php
                     $status_count = $row['type'];
                     $db = new Database();
                     $getRer = $db->getRows("SELECT * FROM user_status WHERE type = '$status_count'");
                     echo count($getRer); ?>
                </div>
                <div class="card-box__card__info--name">
                    <?php echo ucfirst($row['type']); 
                    ?>
                </div>
            </div>
            <div class="card-box__card__info--icon">

                <?php
                if ($row['type'] === 'daily views') { 
                    ?>
                    <svg class="icon-icon">
                        <use xlink:href="../../img/svg/sprite.svg#icon-eye"></use>
                    </svg>
                <?php
                } elseif ($row['type'] === 'comments') { 
                    ?>
                    <svg class="icon-icon">
                        <use xlink:href="../../img/svg/sprite.svg#icon-comment"></use>
                    </svg>
                <?php
                } elseif ($row['type'] === 'stories') {
                     ?>
                    <svg class="icon-icon">
                        <use xlink:href="../../img/svg/sprite.svg#icon-books"></use>
                    </svg>
                <?php
                 } elseif ($row['type'] === 'connections') { ?>
                    <svg class="icon-icon">
                        <use xlink:href="../../img/svg/sprite.svg#icon-users2"></use>
                    </svg>
                <?php } 
                ?>

            </div>
        </div>

    <?php  } 
    ?>
</div>