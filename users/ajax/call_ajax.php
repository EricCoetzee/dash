<?php
require_once('../../includes/db/init.php');
$s1 = trim($_REQUEST["n"]);
$db = new Database();
$getRows = $db->getRows("SELECT * FROM forms  WHERE title LIKE '%" . $s1 . "%' ORDER BY date LIMIT 10");
function die_r($value)
{
    $s = "";
    foreach ($value as $row) {
        $image = $row['img_one'];
        if ($image == null || $image == false) {
            $image = 'image.png';
        }
        $s = $s . "
    <a class='link-p-colr' href='../posts/post/" . $row['post_id'] . "'>
        <div class='live-outer'>
                <div class='live-im'>
                    <img src='../img/" . $image . "'/>
                </div>
                <div class='live-product-det'>
                    <div class='live-product-name'>
                        <p><i class='icon-arrow-alt-circle-right'> " . substr($row['title'], 0, 30) . "</i></p>
                    </div>
                    <div class='live-product-name'>
                    	<p>" . $row['category'] . "</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>" . $row['age_group'] . "</p></div>
                    </div>
                </div>
            </div>
	</a>
	";
    }
    echo $s;
}
die_r($getRows);
$db->Disconnect();
