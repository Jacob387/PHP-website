    <!-- Jacob Reza Term project to display a chinese zodiac website 
along with several other functions such as year check, simialarites , embedded
words , loops, switch statement , and uploading certain items like proverbs or pictures-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <title>Show source code</title> 
    <!-- Project 5-3.-->
</head>
<body>
<?php
if (isset($_GET['source_file'])) {
    $source_file = file_get_contents(stripcslashes($_GET['source_file']));
    highlight_string($source_file);
}
else {
    echo "<p>No source file entered</p>";
}
?>
</body>
</html>
