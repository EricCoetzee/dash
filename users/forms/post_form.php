<?php include_once('../../includes/db/init.php');  ?>

<?php

$user = "EzeeMax";
// if (!logged_in()) {
//     redirect('../');
// } else {
    
//     if (isset($_COOKIE['EzeeMax']) && isset($_COOKIE['ezeemaxMail']) && isset($_COOKIE['protection'])) {
//         $user = $_COOKIE['EzeeMax'];
//     } elseif (isset($_SESSION['username'])) {
//         $user = $_SESSION['username'];
//     }
// }
$sitename = "EzeeMax";
// require("../../vendor/autoload.php");
$category = htmlspecialchars(strip_tags($_POST['category']));

$gender = htmlspecialchars(strip_tags($_POST['gender']));
$age = htmlspecialchars(strip_tags($_POST['age']));
$yurl = htmlspecialchars(strip_tags($_POST['yurl']));
$title = htmlspecialchars(strip_tags($_POST['title']));
$description = htmlspecialchars(strip_tags($_POST['description']));

/* ************************************************************************************************ */
$resizeWidth = 400;
$resizeHeight = 400;

if (!empty($_FILES['img1']['tmp_name']) && empty($_FILES['img2']['tmp_name']) && empty($_FILES['img3']['tmp_name']) && empty($_FILES['img4']['tmp_name']) && empty($_FILES['img5']['tmp_name']) && empty($_FILES['img6']['tmp_name'])) {
    $none = 1;
} elseif (!empty($_FILES['img1']['tmp_name']) && !empty($_FILES['img2']['tmp_name']) && empty($_FILES['img3']['tmp_name']) && empty($_FILES['img4']['tmp_name']) && empty($_FILES['img5']['tmp_name']) && empty($_FILES['img6']['tmp_name'])) {
    $none = 2;
} elseif (!empty($_FILES['img1']['tmp_name']) && !empty($_FILES['img2']['tmp_name']) && !empty($_FILES['img3']['tmp_name']) && empty($_FILES['img4']['tmp_name']) && empty($_FILES['img5']['tmp_name']) && empty($_FILES['img6']['tmp_name'])) {
    $none = 3;
} elseif (!empty($_FILES['img1']['tmp_name']) && !empty($_FILES['img2']['tmp_name']) && !empty($_FILES['img3']['tmp_name']) && !empty($_FILES['img4']['tmp_name']) && empty($_FILES['img5']['tmp_name']) && empty($_FILES['img6']['tmp_name'])) {
    $none = 4;
} else {
    $none = null;
}
for ($x = 1; $x <= $none; $x++) {
    $imgTemp = $_FILES['img' . $x]['tmp_name'];
    $image = imagecreatefromstring(file_get_contents($imgTemp));
    $image_width = imagesx($image);
    $image_height = imagesy($image);
    $imageLayer = imagecreatetruecolor($resizeWidth, $resizeHeight);
    imagealphablending($imageLayer, true);
    imagecopyresampled($imageLayer, $image, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $image_width, $image_height);
    ${"img" . "$x"} = "aeprpilciccoattzieoenof" . uniqid() . $x . "_" . date("jM,Y") . ".jpg";
    imagejpeg($imageLayer);
    imagejpeg($imageLayer, "../../img/".${"img"."$x"});
    imagedestroy($imageLayer);
    imagedestroy($image);
    
}
if (empty($img1) || $img1 == false || $img1 == null) {
    $img1 = '';
}
if (empty($img2) || $img2 == false || $img2 == null) {
    $img2 = '';
}
if (empty($img3) || $img3 == false || $img3 == null) {
    $img3 = '';
}
if (empty($img4) || $img4 == false || $img4 == null) {
    $img4 = '';
}

/* *************************************************************************************** */
// $resizeWidth2 = 1200;
// $resizeHeight2 = 1200;
// $margin_right = 20;
// $margin_bottom = 20;
// for ($mo = 1; $mo <= $none; $mo++) {
//     $imgTemper = $_FILES['img' . $mo]['tmp_name'];
//     $image2 = imagecreatefromstring(file_get_contents($imgTemper));
//     $image_width2 = imagesx($image2);
//     $image_height2 = imagesy($image2);
//     $imageLayer2 = imagecreatetruecolor($resizeWidth2, $resizeHeight2);
//     imagealphablending($imageLayer2, true);
//     imagecopyresampled($imageLayer2, $image2, 0, 0, 0, 0, $resizeWidth2, $resizeHeight2, $image_width2, $image_height2);
//     $db = new Database();
//     $getRow = $db->getRow("SELECT img FROM users WHERE username = '$user'");
//     $imger = $getRow['img_one'];
//     if ($imger === 'userImage.png') {
//         $watermark_image = imagecreatefrompng('../../img/round-icon-192.png');
//     } else {
//         $watermark_image = imagecreatefrompng("../../img/$imger");
//     }
//     $watermark_image_width = imagesx($watermark_image);
//     $watermark_image_height = imagesy($watermark_image);
//     $imgX = imagesx($imageLayer2);
//     $imgY = imagesy($imageLayer2);
//     $font = "/home/EzeeMax/public_html/users/actions/fonts/arial.TTF";
//     $imgTextColWhite = imagecolorallocate($imageLayer2, 255, 255, 255);
//     $imgTextColBlue = imagecolorallocate($imageLayer2, 33, 150, 243);
//     $imgTextColBack = imagecolorallocatealpha($imageLayer2, 248, 6, 6, 70);
//     $txt = "Welcome";
//     imagefilledrectangle($imageLayer2, 362, 18, 850, 120, $imgTextColBack);
//     // if (htmlspecialchars(strip_tags($_POST['pricingSelect'])) === 'amount') {
//     //     $txt =  'R ' . number_format(htmlspecialchars(strip_tags(substr($_POST['amount'], 0, 10))));
//     //     imagefilledrectangle($imageLayer2, 362, 18, 850, 120, $imgTextColBack);
//     // } elseif (htmlspecialchars(strip_tags($_POST['pricingSelect'])) === 'Contact owner') {
//     //     $txt = "Contact Me";
//     //     imagefilledrectangle($imageLayer2, 35, 1070, 544, 1170, $imgTextColBack);
//     //     imagettftext($imageLayer2, 60, 0, 50, 1150, $imgTextColBlue, $font, "$phoneNumber");
//     //     imagettftext($imageLayer2, 60, 0, 50 + 4, 1150, $imgTextColWhite, $font, "$phoneNumber");
//     //     imagefilledrectangle($imageLayer2, 362, 18, 850, 120, $imgTextColBack);
//     // } elseif (htmlspecialchars(strip_tags($_POST['pricingSelect'])) === 'trade') {
//     //     $txt = ucfirst("trading");
//     //     imagefilledrectangle($imageLayer2, 362, 18, 850, 120, $imgTextColBack);
//     // } elseif (htmlspecialchars(strip_tags($_POST['pricingSelect'])) === 'negotiable') {
//     //     $txt =  'R ' . number_format(htmlspecialchars(strip_tags(substr($_POST['amount'], 0, 7)))) . " (Neg)";
//     //     imagefilledrectangle($imageLayer2, 230, 18, 980, 120, $imgTextColBack);
//     // } else {
//     //     $txt = ucwords(htmlspecialchars(strip_tags($_POST['pricingSelect'])));
//     //     imagefilledrectangle($imageLayer2, 362, 18, 850, 120, $imgTextColBack);
//     // }
//     $text_size = imagettfbbox(60, 0, $font, "$txt");
//     $text_width = max([$text_size[2], $text_size[2]]) - min([$text_size[0], $text_size[0]]);
//     $centerX = ceil(($imgX - $text_width) / 2);
//     $centerX = $centerX < 0 ? 0 : $centerX;
//     $copyImage = imagecopy(
//         $imageLayer2,
//         $watermark_image,
//         $imgX - $watermark_image_width - $margin_right,
//         $imgX - $watermark_image_height - $margin_bottom,
//         0,
//         0,
//         $watermark_image_width,
//         $watermark_image_height
//     );
//     imagettftext($imageLayer2, 60, 0, $centerX, 90, $imgTextColBlue, $font, "$txt");
//     imagettftext($imageLayer2, 60, 0, $centerX + 4, 90, $imgTextColWhite, $font, "$txt");
//     ${"eimage" . "$mo"} = $user . uniqid() . $mo . "_" . date("jM,Y") . ".jpg";
//     imagejpeg($imageLayer2);
//     imagejpeg($imageLayer2, "../../img/" . ${"eimage" . "$mo"});
//     imagedestroy($imageLayer2);
//     imagedestroy($watermark_image);
//     imagedestroy($image2);
// }
/* ***************************************************************************************** */
$userInfo = htmlspecialchars(strip_tags($_POST['user-info']));
$user_comments = htmlspecialchars(strip_tags($_POST['user-comments']));
$additional_links = htmlspecialchars(strip_tags($_POST['additional-links']));
$db = new Database();
$insertRow = $db->insertRow("INSERT INTO forms(username, category, yurl, gender, age_group, title, descript, img_one, img_two, img_three, img_four, user_info_display, allow_comments, additional_link) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)", [$user, $category, $yurl, $gender, $age, $title, $description, $img1, $img2, $img3, $img4, $userInfo, $user_comments, $additional_links]);

$db->Disconnect();

 if ($insertRow == true) {

// set_msg(
// <<<ezee
// <div class="alert-container">
// <div class="alert-two">
// <span class="closebtn" id="alert" onclick="this.parentElement.style.display='none';">&times;</span> 
// Successfully Post...
// </div>
// </div>
// ezee
//     );
//     $templete_file = "../../includes/templetes/post.php";
//     $subject = " You Post " . substr($title, 0, 20) . " has been Activated";
//     $swap_var = array(
//         "{SITE_ADDR}" => "https://maketime.org.za",
//         "{EMAIL_ADDR}" => $email,
//         "{POST_TITLE}" => strtoupper($title),
//         "{POST_CAT}" => strtoupper("Motorcycle"),
//         "{IMAGE}" => $imgOne,
//         "{USER}" => ucwords($username),
//         "{DESCRIPT}" => $description,
//         "{PAYMENT}" => strtoupper($payment),
//         "{PHONE_NO}" => strtoupper($phoneNumber),
//         "{MSG}" => "Hi, " . ucwords($username) . ". You have successfully added a post on $sitename.",
//         "{INSTA_LINK}" => "https://www.instagram.com/EzeeMaxonline/?hl=en",
//         "{LINKEDIN_LINK}" => "https://www.linkedin.com/in/ex-carz-76b5b01b8/",
//         "{TWITTER_LINK}" => "https://twitter.com/EzeeMax1",
//         "{FACEB_LINK}" => "https://www.facebook.com/EzeeMax-101128935117855"
//     );
//     if (file_exists($templete_file)) {
//         $msg = file_get_contents($templete_file);
//     } else {
//         die('unable to locate file');
//     }
//     foreach (array_keys($swap_var) as $key) {
//         if (strlen($key) > 2 && trim($key) !== "") {
//             $msg = str_replace($key, $swap_var[$key], $msg);
//         }
//     };
//     $msg2 =
//         "
// Hi, $username.
// Thanks a million for being active on $sitename. We really appreciate you.
// Unfortunatly your email server does not support HTML emails. 
// But that's okay. We've got you covered.
// You have successfully created a post on $sitename;
// Post Title: " . ucwords($title) . ";   
// Post Description: $description; 
// Category: Motorcycle;   Payment: " . ucwords($payment) . ";
// Contact Information: $phoneNumber,   $email;
// There are some images attached to this email. 
// Please view the images and use it for your social media attchements.
// Be sure come back.
// ";
//     if (!empty($eimage1) || $eimage1 !== "") {
//         $imgAtt = "../../img/$eimage1";
//     }
//     if (!empty($eimage2) || $eimage2 !== "") {
//         $imgAtt2 = "../../img/$eimage2";
//     }
//     if (!empty($eimage3) || $eimage3 !== "") {
//         $imgAtt3 = "../../img/$eimage3";
//     }
//     if (!empty($eimage4) || $eimage4 !== "") {
//         $imgAtt4 = "../../img/$eimage4";
//     }
//     if (!empty($eimage5) || $eimage5 !== "") {
//         $imgAtt5 = "../../img/$eimage5";
//     }
//     if (!empty($eimage6) || $eimage6 !== "") {
//         $imgAtt6 = "../../img/$eimage6";
//     }
//     send_email($email, $subject, $msg,  $msg2, $imgAtt, $imgAtt2, $imgAtt3, $imgAtt4, $imgAtt5, $imgAtt6);
// } else {
//     set_msg(
//         <<<eze
// <div class="alert-container">
// <div class="alert">
// <span class="closebtn" id="alert" onclick="this.parentElement.style.display='none';">&times;</span> 
// Error: There was an error.
// </div>
// </div>
// eze
//     );
// }
// if (!empty($eimage1) || $eimage1 !== "") {
//     $imgAtt = "../../img/$eimage1";
//     unlink($imgAtt);
// }
// if (!empty($eimage2) || $eimage2 !== "") {
//     $imgAtt2 = "../../img/$eimage2";
//     unlink($imgAtt2);
// }
// if (!empty($eimage3) || $eimage3 !== "") {
//     $imgAtt3 = "../../img/$eimage3";
//     unlink($imgAtt3);
// }
// if (!empty($eimage4) || $eimage4 !== "") {
//     $imgAtt4 = "../../img/$eimage4";
//     unlink($imgAtt4);
// }
// if (!empty($eimage5) || $eimage5 !== "") {
//     $imgAtt5 = "../../img/$eimage5";
//     unlink($imgAtt5);
// }
// if (!empty($eimage6) || $eimage6 !== "") {
//     $imgAtt6 = "../../img/$eimage6";
//     unlink($imgAtt6);
}
header("Location: ../page/view_post?operation=successfullyPost");

?>