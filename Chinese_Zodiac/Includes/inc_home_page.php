<a href="index.php?page=home_page&section=php" class="navlink">PHP</a>
<a href="index.php?page=home_page&section=zodiac" class="navlink">Chinese Zodiac</a>


<?php 
//the three links you see on the homepage
    if (isset($_GET['section'])) {
        switch ($_GET['section']) {
            case 'zodiac':
                include('Includes/inc_chinese_zodiac.php');
                break;
            default:
                include('Includes/inc_php_info.php');
                break;
        }
    }
    else {
        include ('Includes/inc_php_info.php');
    }
?>
