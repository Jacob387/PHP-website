

&copy; <?php

$copyYear = 2015; // Set your website start date
$curYear = date('Y'); // Keeps the second year updated
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');

?> Copyright.


<?php
$filename = "chinese_proverbs.txt";
$handle = fopen($filename, "r");
$prov_array = file($filename);
$count = count($prov_array);
$proverb = rand(0, $count-1);
echo "$prov_array[$proverb]";
fclose($handle);

$filename = "hitcount.txt";
$handle = fopen($filename, "r");
$count = fread($handle, filesize($filename));
fclose($handle);

echo "</br>";

echo "</br>Page Views: $count</br>";

$count = $count + 1;

$handle = fopen($filename, "w");
fwrite($handle, $count, strlen($count));
fclose($handle);

echo "</br>";
?>

