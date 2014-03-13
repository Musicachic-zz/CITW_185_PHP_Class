<!doctype html>
<html lang="en-us">
    <head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/styles.css" media="screen">	
</head>

<?php
    // code
    error_reporting(E_ALL);    // set error reporting to all
    echo("<h1 id=Mainheader>Teresa's code output for Loops:</h1>");

    // foreach loop using key =====================

    echo('<p class=padding><b>For Each "loop" using a key:</b><br><br>  ');

    // populate an array with keys and values

    $a = array('One' => "Weird Science",
                    'Two' => "Rocky IV",
                    'Three' => "Enter the Dragon",
                    'Four' => "Coming to America",
                    'Five' => "The Last Dragon",
                    );
    echo('My top 5 favorite movies of all time are: <br>');

    foreach($a as $key => $movie)
        {
        echo(" $key/$movie <br>");
        }

    echo('</p>');

?>
</html>

