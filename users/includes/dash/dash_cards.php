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

                <?php
                if ($row['type'] === 'daily views') { ?>
                    <ion-icon class="icon-icon" name="eye-outline"></ion-icon>
                <?php
                } elseif ($row['type'] === 'comment') { ?>
                    <ion-icon class="icon-icon" name="comments-outline"></ion-icon>
                <?php
                } elseif ($row['type'] === 'daily views') {
                } elseif ($row['type'] === 'daily views') {
                }

                ?>

            </div>
        </div>

    <?php } ?>
</div>