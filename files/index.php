<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html><head>
<title>SparkleFileManager V1.0</title>
<link rel="stylesheet" type="text/css" href="../style.css">
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
<h1>View Your Files</h1>
<p>Click on a file to view it:</p>
</div>

<?php





$path = dirname($_SERVER['PATH_TRANSLATED']) . "/";

$dir_handle = @opendir($path) or die("Unable to open $path");



echo "<ul>";





while ($file = readdir($dir_handle)) {

	$path_parts = pathinfo("$path/" . $file);

	$ext = $path_parts["extension"];



	if($file == "." || $file == ".." || $file == "index.php" )

	continue;





	if ($ext == "txt") {

		$icon = "txt.gif";

	} elseif ($ext == "php" || $ext == "html" || $ext == "htm") {

		$icon = "web.gif";

	} elseif ($ext == "doc") {

		$icon = "word.gif";

	} elseif ($ext == "jpg" || $ext == "gif") {

		$icon = "img.gif";

	} elseif ($ext == "pdf") {

		$icon = "pdf.gif";

	} elseif ($ext == "") {

		$icon = "dir.gif";

	} else {

		$icon = "txt.gif";

	}





	echo "<li><img src=\"../img/" . $icon . "\" alt=\"\" /> <a href=\"" . $file . "\">" . $file . "</a></li>\n";



}



closedir($dir_handle);

echo "</ul>";

?>

<p class="nav"><a href="../index.php">Main menu</a> | <a href="../upload.php">Upload a file</a> | <a href="manage.php">Manage Files</a></p>

<center><p>Powered by <a href="http://creamed-coconut.org" target="_blank">SparkleFileManager</a></p></center>

</body>

</html>





