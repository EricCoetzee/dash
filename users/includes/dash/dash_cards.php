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
                    <ion-icon class="icon-icon" name="eye-outline"></ion-icon>
                <?php
                } elseif ($row['type'] === 'comments') { 
                    ?>
                    <ion-icon class="icon-icon" name="chatbubbles-outline"></ion-icon>
                <?php
                } elseif ($row['type'] === 'stories') {
                     ?>
                    <ion-icon class="icon-icon" name="documents-outline"></ion-icon>
                <?php
                 } elseif ($row['type'] === 'connections') { ?>
                    <ion-icon class="icon-icon" name="person-add-outline"></ion-icon>
                <?php } 
                ?>

            </div>
        </div>

    <?php  } 
    ?>
</div>