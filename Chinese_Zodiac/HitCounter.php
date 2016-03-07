    <!-- Jacob Reza Term project to display a chinese zodiac website 
along with several other functions such as year check, simialarites , embedded
words , loops, switch statement , and uploading certain items like proverbs or pictures-->
<?php 

/** 
 * Create an empty text file called hitcount.txt and  
 * upload to the same directory as the page you want to  
 * count hits for. 
 */ 

// Open the file for reading 
$fp = fopen("hitcount.txt", "r"); 

// Get the existing count 
$count = fread($fp, 1); 

// Close the file 
fclose($fp); 

// Add 1 to the existing count 
$count = $count + 1; 

// Display the number of hits 
// If you don't want to display it, comment out this line 
echo "<p>Page views:" . $count . "</p>"; 

// Reopen the file and erase the contents 
$fp = fopen("hitcount.txt", "w"); 

// Write the new count to the file 
fwrite($fp, $count); 

// Close the file 
fclose($fp); 

?> 
