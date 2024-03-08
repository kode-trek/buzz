<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="src.css">

<title>buzzer-IM</title>

<?php
	$flag = 1;
	date_default_timezone_set("Asia/Tehran");
	//
	$ip = $_SERVER['REMOTE_ADDR'];
	$fh = @fopen("incoming.txt", "w");
	$str1 =
	"[".date("Y/m/d")."__".date("h:i:sa")."]".
	"[".htmlspecialchars($_POST["name"])."]".
	"[".htmlspecialchars($_POST["email"])."]".
	"[".$ip."]"."\n".
	"START#\n".htmlspecialchars($_POST["msg"])."\n#STOP".
	"\n\n";
	@fwrite($fh, $str1);
	@fclose($fh);
	//
	$fh = @fopen("LOG.txt", "a");
	@fwrite($fh, $str1);
	@fclose($fh);
	//
	system("mkdir ".$ip);
	$target_dir = $ip."/";
	//
	$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	$file_tmp = $_FILES["fileToUpload"]["tmp_name"];
	// checks file-size >4MB
	$file_size = $_FILES["fileToUpload"]["size"];
	if ($file_size >= 4194304) $flag=0;
	//
	if ($flag == 1) @file_put_contents($target_file, @fopen($file_tmp, "r"));
?>

<div id="footer" align="center">
	<p>Message SENT.</p>
	<a href="src.htm" >&larr;BACK</a>
</div>

<script src="src.js"></script>
