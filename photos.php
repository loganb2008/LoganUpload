<?php
include("config.php");
$path = $config['imgpath'];
if ($handle = opendir("uploads/")) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "<div class='entry'><img class='thumbnail' width='200' height='150' src='uploads/$entry'><br><a href='uploads/$entry'>$entry</a><br></entry>";
        }
    }

    closedir($handle);
}
