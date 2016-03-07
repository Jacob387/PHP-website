    <!-- Jacob Reza Term project to display a chinese zodiac website 
along with several other functions such as year check, simialarites , embedded
words , loops, switch statement , and uploading certain items like proverbs or pictures-->
<DOCTYPE! HTML>
<head>
<title>Upload Proverb</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
<h1>Upload Proverb</h1>
<h4>Enter a proverb to upload to the Proverbs file to be displayed randomly on the webpage.</h4>
</head>
<body>
<form action="" method="post">
	<input type = "text" name = "proverbToUpload" size="50"><br><br>
	<input type = "submit" name = "submit" value="Upload Proverb">
</form>
<?php

	if(isset($_POST['submit'])){
		if(!empty($_POST['proverbToUpload'])){
			$proverbToUpload = $_POST['proverbToUpload'];
//chooses my text file to open and to later write whatever was submitted in the form
			$myfile = "chinese_proverbs.txt";
			$fh = fopen($myfile, 'a') or die("Cannot open file!");
//writes the file
			fwrite($fh, $proverbToUpload.PHP_EOL);
			fclose($fh);
			echo "Your proverb has been added. Thank you.";
		}
		else
			echo "Please enter a proverb.";
		
	}
?>
</body>
</html>
