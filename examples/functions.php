<?php
session_start();

include('../includes/header.php');

echo("<h1>Function Examples</h1>");

function first() {
    echo("<h3>My first function.</h3>");
    echo("This is my first function. It's not that special.");
}

first();

function loopsInclude() {
    echo("<h3>This is an example of a function that has an includes</h3>");
    include('shorterLoops.php');
}

loopsInclude();

function sortKevinSmithMovies() {
    
    echo("<h3>This is an example of a function that contains work to sort an array.</h3>");

    $moviearray = array
        (
        array(
            'Title' => "Dogma",
            'Year' => "1992",
        ),
        array(
            'Title' => "Clerks",
            'Year' => "1992",
        ),
        array(
            'Title' => "Clerks 2",
            'Year' => "1992",
        ),
        array(
            'Title' => "Jay and Silent Bob Strike Back",
            'Year' => "1992",
        ),
        array(
            'Title' => "Chasing Amy",
            'Year' => "1992",
        ),
        array(
            'Title' => "Mallrats",
            'Year' => "1992",
        )
    );
    
    sort($moviearray);
    echo('<pre>');
    print_r($moviearray);
    echo('</pre>');
    
}

sortKevinSmithMovies();

include('../includes/footer.php');
?>

