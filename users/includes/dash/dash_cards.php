<div class="card-box">
    <?php
    
    $db = new Database();
    $getRows = $db->getRows("SELECT DISTINCT type FROM user_status");
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
                    <?php echo ucfirst($row['type']); ?>
                </div>
            </div>
            <div class="card-box__card__info--icon">

                
                <ion-icon class="icon-icon" name="eye-outline"></ion-icon>
            </div>
        </div>

    <?php } ?>
</div>