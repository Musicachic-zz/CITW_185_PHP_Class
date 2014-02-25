<?php 

include('../includes/header.php');

echo("<h1>Function Examples</h1>");

function first(){
    echo("This is my first function. It's not that special.");
}

first();

function loopsInclude(){
    include('loops.php');
}

loopsInclude();

include('../includes/footer.php');
?>

