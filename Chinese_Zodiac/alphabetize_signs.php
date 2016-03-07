<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
<title>Alphabetize Signs</title>

</head>
<style>

</style>
<body>

<h2 style="text-align:center">Alphabetize the 12 Chinese Zodiac Signs</h2>

<form name="zodiacSigns" method="post">

<p>Enter the 12 Chinese Zodiac signs separated by commas: <input type="text" name="signs" size="100"/></p>
<p><input type="reset" value="Clear Form" />&nbsp;&nbsp;
   <input type="submit" name="Submit" value="Alphabetize Signs" /></p>
</form>

<?php
error_reporting (0);
//takes input and stretches it out to see if 12 words were entered
$signs = ($_POST['signs']); 

$SignsArray = explode(",", $signs);

$count = count($SignsArray);

if ($count != 12)
    echo "<p>You have not entered 12 zodiac signs separated by commas.</p>";
else {
//simple sort array sorts it
    sort($SignsArray);

    echo "<p>";

    for ($i = 0; $i < $count; ++$i) {
        echo $SignsArray[$i] . "<br />";
    }

echo "</p>";
}

?>

</body>
</html>
