<?php 
    include('../includes/header.php');


    echo("<h1>String Examples</h1>");
    
    $myclasses = <<<END_TEXT
This semester I am taking PHP Class on Tuesdays and Thursdays. I also have 
Advanced Java Class on Tuesdays and Thursdays. I have 
Systems Analysis and Design online. Each of my classes are 4 credit each.
            
END_TEXT;
            
            echo ("$myclasses<br><br>");
            
            echo ("Count of how many times you see the word: <br><br>");
            
            echo('class: ');
            echo substr_count(strtolower($myclasses),"class");
            
                        
    include('../includes/footer.php');
?>

