<?php

include('../includes/header.php');

error_reporting(E_ALL);

echo("<h3>My Dolph Lundgren Movie Collection</h3>");

$moviearray = array
    (
    array(
        'Title' => "Universal Soldier",
        'Year' => "1992",
        'Sort Title' => "Universal Soldier"
    ),
    array(
        'Title' => "Rocky IV",
        'Year' => "1985",
        'Sort Title' => "Rocky IV"
    ),
    array(
        'Title' => "Silent Trigger",
        'Year' => "1996",
        'Sort Title' => "Silent Trigger"
    ),
    array(
        'Title' => "Pentathlon",
        'Year' => "1994",
        'Sort Title' => "Pentathlon"
    ),
    array(
        'Title' => "Blackjack",
        'Year' => "1998",
        'Sort Title' => "Blackjack"
    ),
    array(
        'Title' => "Army of One",
        'Year' => "1993",
        'Sort Title' => "Army of One"
    ),
    array(
        'Title' => "Showdown in Little Tokyo",
        'Year' => "1991",
        'Sort Title' => "Showdown in Little Tokyo"
    ),
    array(
        'Title' => "Bridge of Dragons",
        'Year' => "1999",
        'Sort Title' => "Bridge of Dragons"
    ),
    array(
        'Title' => "Hidden Agenda",
        'Year' => "2001",
        'Sort Title' => "Hidden Agenda"
    ),
    array(
        'Title' => "Direct Contact",
        'Year' => "2009",
        'Sort Title' => "Direct Contact"
    ),
    array(
        'Title' => "The Killing Machine",
        'Year' => "2010",
        'Sort Title' => "Killing Machine, The"
    ),
    array(
        'Title' => "The Expendables",
        'Year' => "2010",
        'Sort Title' => "Expendables, The"
    ),
    array(
        'Title' => "The Expendables 2",
        'Year' => "2012",
        'Sort Title' => "Expendables 2, The"
    ),
    array(
        'Title' => "Missionary Man",
        'Year' => "2007",
        'Sort Title' => "Missionary Man"
    ),
    array(
        'Title' => "The Russian Specialist",
        'Year' => "2005",
        'Sort Title' => "Russian Specialist, The"
    ),
    array(
        'Title' => "Retrograde",
        'Year' => "2004",
        'Sort Title' => "Retrograde"
    ),
    array(
        'Title' => "Command Performance",
        'Year' => "2009",
        'Sort Title' => "Command Performance"
    ),
    array(
        'Title' => "Diamond Dogs",
        'Year' => "2007",
        'Sort Title' => "Diamond Dogs"
    ),
    array(
        'Title' => "Direct Action",
        'Year' => "2004",
        'Sort Title' => "Direct Action"
    ),
    array(
        'Title' => "The Punisher",
        'Year' => "1989",
        'Sort Title' => "Punisher, The"
    ),
    array(
        'Title' => "Men of War",
        'Year' => "1994",
        'Sort Title' => "Men of War"
    )
);

echo('<pre>');
print_r($moviearray);
echo('</pre>');

function movie_sort($a, $b){
    
    return $a['Sort Title'] > $b['Sort Title'];
}

//array_multisort($moviearray);

usort($moviearray, 'movie_sort');
echo('<pre>');
print_r($moviearray);
echo('</pre>');

include('../includes/footer.php');
?>

