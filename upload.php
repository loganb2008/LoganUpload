<?php
include("config.php");
if($config['protected'] === true) {
    if(!in_array($_SERVER['REMOTE_ADDR'], $allowedip)) {
     die("<h1>This page is IP protected.");
    }
}
function genMediaID($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
header('Content-Type: text/plain');
$target_dir = "uploads/";
$of = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($of,PATHINFO_EXTENSION));
$target_id = genMediaID(10);
$target_file = $target_dir . $target_id . "." . $imageFileType;
$uploadOk = 1;

if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    die($config['fakeimageerror']);
    $uploadOk = 0;
  }
}

if ($_FILES["fileToUpload"]["size"] > $config['maxsize']) {
  die($config['tlerror']);
  $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  die($config['fterror']);
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   die($_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . htmlspecialchars($config['imgpath']) . $target_id . "." . $imageFileType);
   die();
  } else {
   die("An error occurred uploading your file. Check the logs for more info.");
  }
}
?>
