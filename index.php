<?php
include("config.php");
if($config['protected'] === true) {
    if(!in_array($_SERVER['REMOTE_ADDR'], $allowedip)) {
     die("<h1>This page is IP protected.");
    }
}
?>
<html>
<head>
<title><?php echo(htmlspecialchars($config['pagetitle'])); ?></title>
</head>
<body>
<center>
<h1><?php echo(htmlspecialchars($config['pagename'])); ?></h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select file to upload
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
</center>
</body>
</html>
