<?php
include("config.php");
if($config['protected'] === true) {
    if(!in_array($_SERVER['REMOTE_ADDR'], $allowedip)) {
     die("<h1>This page is IP protected.");
    }
}
$path = $config['imgpath'];
if ($handle = opendir("uploads/")) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<div class='entry'><img class='thumbnail' width='200' height='150' src='uploads/$entry'><br><a href='uploads/$entry'>$entry</a><br></div>";
        }
    }

    closedir($handle);
}
