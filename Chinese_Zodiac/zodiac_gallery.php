    <!-- Jacob Reza Term project to display a chinese zodiac website 
along with several other functions such as year check, simialarites , embedded
words , loops, switch statement , and uploading certain items like proverbs or pictures-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zodiac Gallery</title>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>

<body>

<h2 style="text-align:center">Zodiac Gallery</h2>
<p>Click a thumbnail image to see enlarged view.</p>

<?php
//make an array to list all the images referenced 
$SignsArray = array("images/rat.jpg" => "Rat",
                    "images/ox.jpg" => "Ox",
                    "images/tiger.jpg" => "Tiger",
                    "images/rabbit.jpg" => "Rabbit",
                    "images/dragon.jpg" => "Dragon",
                    "images/snake.jpg" => "Snake",
                    "images/horse.jpg" => "Horse",
                    "images/ram.jpg" => "Ram",
                    "images/monkey.jpg" => "Monkey",
                    "images/rooster.jpg" => "Rooster",
                    "images/dog.jpg" => "Dog",
                    "images/pig.jpg" => "Pig");


//assigning the names to the images 
echo "<p><a href=\"images/rat.jpg\"><img src=\"images/rat.jpg";
foreach ($SignsArray as $Sign) {
    echo "\" alt=\"" . $Sign . "\" height=\"25\" width=\"25\"/></a>&nbsp;&nbsp;" . $Sign . "<br /><a href=\"" . key($SignsArray) . "\"><img src=\"" . key($SignsArray);
    next($SignsArray);
}

echo "</p>";


?>
</body>
</html>
