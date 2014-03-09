<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">


<html><head>
<title>SparkleFileManager V1.0</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div align="center"><table>
<td style="padding-left: 0pt; padding-top: 10pt; padding-bottom: 0pt">
<table cellpadding="10" cellspacing="5"><tr>
<tr><td width="400" style="border: 7px solid red; filter: alpha(opacity=100); background-color: white" valign="top" cellpadding="0" cellspacing="0">
<table bgcolor="white" cellspacing="0" cols="0" width="100%" style="padding-bottom: 10px">
<div align="center">
<br>
<div style="line-height: 5pt"><br></div>
</td></tr></table>
</div>
<div class="header">
<h1>Upload a New File</h1>
</div>




<?php



if ($_FILES['thefile']) {



	$uploaddir = "/home/sparkle1/public_html/filemanager/files/";

	$newfile = time() . $_FILES['thefile']['name'];

	$uploadfile = $uploaddir  . $newfile;

	

	if (move_uploaded_file($_FILES['thefile']['tmp_name'], $uploadfile)) {

   		$result = "upload";

	} else {

  		$result = "noupload";

	}

}

?>



<div id="filemanager">





<?if ($result == "upload") {

	echo "<p>Your file has been uploaded with a new file name of " . $newfile . ".</p>\n";

	echo "<p>View your file <a href=\"files/index.php\">here</a>.</p>\n";

} elseif ($result == "noupload") {

	echo "<p>Your file did not upload, please try again.</p>";

}

?>



<form enctype="multipart/form-data" action="upload.php" method="post">



Upload this file: <input name="thefile" type="file" />



<p><input type="submit" value="Upload File" /></p>



</form>

<p class="nav"><a href="index.php">Main menu</a> | <a href="files/index.php">View Files</a> | <a href="files/manage.php">Manage Files</a></p>

<center><p>Powered by <a href="http://creamed-coconut.org" target="_blank">SparkleFileManager</a></p></center>

</div>

</body>

</html>

