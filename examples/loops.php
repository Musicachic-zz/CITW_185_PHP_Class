<!doctype html>
<html lang="en-us">
    <head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/styles.css" media="screen">	
</head>

<?php
    include('../includes/header.php');
    // code
    error_reporting(E_ALL);    // set error reporting to all
    echo("<h1 id=Mainheader>Teresa's code output for Loops:</h1>");

    echo('<h3>Loops</h3>');

    // Numeric 'for loop' =====================

    echo('<p class=padding><b>Numeric "for loop":</b><br> ');

    for ($i = 1; $i < 10; $i++)
        {
        echo('$'.$i.'.00'. '<br>');
        }

    echo('</p>');

    // String 'for loop' =====================

    echo('<p class=padding><b>String "for loop": </b><br>');

    for ($i = 'aa'; $i < 'ag'; $i++)
        {
        echo($i.'<br>');
        }

    echo('</p>');

    // while loop =====================
    echo('<p class=padding><b>while "loop" : </b><br>');

    $i = 1;
    while ($i < 10)
        {
        echo('<br>The total price is $10. <br>'
                . 'You provided $'.$i.'<br>'
                . 'You still owe $'.(10-$i).'<br>');
        $i++;
        }

    echo('</p>');

    // foreach loop =====================
    echo('<p class=padding><b>For Each "loop": </b><br><br> ');

    // populate a simple array

    $a = array("Elmhurst College", "NYU", "University of Miami","Butler", 
        "Madonna University", "Oberlin");

    echo('Colleges I applied to after high school: <br>');

    foreach($a as $schools)
        {
        echo(" $schools <br>");
        }

    echo('</p>');

    // foreach loop using key =====================

    echo('<p class=padding><b>For Each "loop" using a key:</b><br><br>  ');

    // populate an array with keys and values

    $a = array('One' => "Weird Science",
                    'Two' => "Rocky IV",
                    'Three' => "Enter the Dragon",
                    'Four' => "Coming to America",
                    'Five' => "The Dark Knight",
                    );
    echo('My top 5 favorite movies of all time are: <br>');

    foreach($a as $key => $movie)
        {
        echo(" $key/$movie <br>");
        }

    echo('</p>');

    include('../includes/footer.php');
?>
</html>