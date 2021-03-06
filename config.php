<?php
$config = array(
    "imgpath" => "/loganupload/uploads/", // Put the location of your image directory here (NOT FULL PATH)
    "pagetitle" => "Your LoganUpload Panel", // Put the title of the page here
    "pagename" => "LoganUpload", // Put want you want the title text on the page to say
    "fterror" => "That file type isn't allowed. Must be an image. Change this in the config.php file.", // Error message for invalid file type
    "tlerror" => "That file is too large. Change this in the config file.", // Error message for too large
    "fakeimageerror" => "That doesn't seem to be an image. Please select an image. Change this in the config file", // Fake image error
    "maxsize" => 10000000, // Max file size in bytes. Default 10MB (10000000 Bytes)
    "protected" => false // IP Whitelist, true = on, false = off
);
$allowedip = array("127.0.0.1", "0.0.0.0"); // Only for if you have IP Whitelist enabled, put allowed ips.
