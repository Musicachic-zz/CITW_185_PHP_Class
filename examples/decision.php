<?php             
    include('../includes/header.php'); 

    // code 
    error_reporting(E_ALL);    // set error reporting to all 
                         
    echo("<h1 id=Mainheader>Teresa's Decision Code</h1>"); 
                         
    echo('<h3> If / Else If / Switch Examples</h3>'); 

    $day = date('l'); // 'G' returns 24-hour format of an hour with leading zeros 

    //========== if ========= 
    echo('<hr>');

    if ($day == 'Saturday' || $day == 'Sunday') 
        { 
        echo('<H3>Woohoo! It\'s the weekend!</h3>'); 
        } 

    if ($day == 'Monday' || $day == 'Wednesday' || $day == 'Friday') 
        { 
        echo('<H3>Oh man... You have to work all day.</h3>'); 
        }
        
    if ($day == 'Tuesday' || $day == 'Thursday')
        { 
        echo('<H3>You have PHP and Java class today.</h3>');
        }
        
    if ($day == 'Thursday')
        { 
        echo('<H3>Remember today is trash pickup day for your street.</h3>');
        }

    //========== if elseif =========
    echo('<hr>');

    if ($day == 'Monday' || $day == 'Wednesday' || $day == 'Friday') 
        { 
        echo('<H3>Oh man... You have to work all day.</h3>'); 
        } 
    elseif ($day == 'Tuesday') 
        { 
        echo('<H3>You have PHP and Java class today.</h3>'); 
        } 
    elseif ($day == 'Thursday')
    {
        echo('<H3>You have PHP and Java class today. <br>'
                . '<br>Remember today is trash pickup day for your street.</h3>');
    }
    else 
        { 
        echo('<H3>Woohoo! It\'s the weekend!</h3>'); 
        } 

    //========== switch ========= 
    echo('<hr>');

    switch($day) 
        { 
        case ($day == 'Saturday' || $day == 'Sunday'): 
        echo('<H3>Woohoo! It\'s the weekend!</h3>'); 
        break; 

        case ($day == 'Monday' || $day == 'Wednesday' || $day == 'Friday'): 
        echo('<H3>Oh man... You have to work all day.</h3>'); 
        break; 

        case ($day == 'Tuesday'): 
        echo('<H3>You have PHP and Java class today.</h3>'); 
        break; 
    
        case ($day == 'Thursday'): 
        echo('<H3>You have PHP and Java class today. <br><br>Remember today is trash pickup day for your street.</h3>'); 
        break; 
        } 
             
    include('../includes/footer.php'); 
?>

