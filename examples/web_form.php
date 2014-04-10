<?php
session_start();
include('../includes/header.php');

echo('<pre>');
print_r($_POST);
echo('</pre>');

echo ("<h1>What Decade Are You A Child Of?</h1>");

$self = htmlspecialchars(basename($_SERVER['SCRIPT_NAME']));

/* @var $first_name type */
$submit = isset($_POST['submit']) ? $_POST['submit'] : null;
$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
$dob = isset($_POST['dob']) ? $_POST['dob'] : null;
$female = isset($_POST['Female']) ? $_POST['Female'] : null;
$male = isset($_POST['Male']) ? $_POST['Male'] : null;
$miamivice = isset($_POST['miamivice']) ? $_POST['miamivice'] : null;
$factsoflife = isset($_POST['factsoflife']) ? $_POST['factsoflife'] : null;
$growingpains = isset($_POST['growingpains']) ? $_POST['growingpains'] : null;
$freshprince = isset($_POST['freshprince']) ? $_POST['freshprince'] : null;
$roseanne = isset($_POST['roseanne']) ? $_POST['roseanne'] : null;
$familymatters = isset($_POST['familymatters']) ? $_POST['familymatters'] : null;
$theoffice = isset($_POST['theoffice']) ? $_POST['theoffice'] : null;
$willandgrace = isset($_POST['willandgrace']) ? $_POST['willandgrace'] : null;
$americanidol = isset($_POST['americanidol']) ? $_POST['americanidol'] : null;

$option = array();

if (isset($_POST['option']))
{
    foreach ($_POST['option'] as $value)
    {
        $option[] = $value;
    }
}

$a = ($female == 'on') ? 'CHECKED' : '';
$b = ($male == 'on') ? 'CHECKED' : '';

$c = ($miamivice == 'on') ? 'CHECKED' : '';
$d = ($factsoflife == 'on') ? 'CHECKED' : '';
$e = ($growingpains == 'on') ? 'CHECKED' : '';
$f = ($freshprince == 'on') ? 'CHECKED' : '';
$g = ($roseanne == 'on') ? 'CHECKED' : '';
$h = ($familymatters == 'on') ? 'CHECKED' : '';
$i = ($theoffice == 'on') ? 'CHECKED' : '';
$j = ($willandgrace == 'on') ? 'CHECKED' : '';
$k = ($americanidol == 'on') ? 'CHECKED' : '';
$checked = 'CHECKED';

$eighties = $c && $d && $e == $checked;
$nineties = $f && $g && $h == $checked;
$milenium = $i && $j && $k == $checked;
$all = $c && $d && $e && $f && $g && $h && $i && $j && $k == $checked;
$any = $c || $d || $e || $f || $g || $h || $i || $j || $k == $checked;

if ($all)
{
    echo ("You apparently have had many lives.");
} 
else if ($eighties & $nineties)
{
    echo ("You are a child of the 80s and the 90s");
} 
else if ($nineties & $milenium)
{
    echo("You are a child of the 90s and the new milenium.");
} 
else if ($any)
{
    echo("Oh good you were a kid once...");

//    if ($eighties & $nineties){
//        echo ("You are a child of the 80s and the 90s");
//    }
//    
//    if ($nineties & $milenium){
//        echo("You are a child of the 90s and the new milenium.");
//    }

    if ($eighties) //&& ($f && $g && $h && $i && $j && $k != $checked) 
    {
        //$checked = 'CHECKED';
        echo ("You are a child of the 80's");
    }
    if ($nineties) //&& ($i && $j && $k && $c && $d && $e != $checked)
    {
        echo ("You are a child of the 90's");
    }
    if ($milenium) //&& ($c && $d && $e && $f && $g && $h != $checked)
    {
        echo ("You are a child of the new milenium.");
    }
}



$step = ($submit == 'Edit') ? 1 : 0;
if ($step)
{
    $edit_on = '';
    $save_on = 'DISABLED';
    $read_only = '';
} else
{
    $edit_on = 'DISABLED';
    $save_on = '';
    $read_only = 'DISABLED';
}


?>
<form action="<?php echo($self); ?>" method="post">
    <table>
        <tr>
            <td class="left" class="label">
                First Name:
            </td>
            <td class="right">
                <input type="text" size="30" name="first_name" value="<?php echo($first_name); ?>" <?php echo($read_only); ?> >
            </td>
            <td class="left" class="label">
                Last Name:
            </td>
            <td class="right">
                <input type="text" size="30" name="last_name" value="<?php echo($last_name); ?>" <?php echo($read_only); ?> >
            </td>

        </tr>
        <tr>
            <td class="left" class="label">
                Date of Birth:
            </td>
            <td class="right">
                <input type="date" name="dob" size="30" value="<?php echo($dob); ?>" <?php echo($read_only); ?>>
            </td>
            <td class="left" class="label">
                Gender:
            </td>
            <td class="right">
                Female <input type="checkbox" name="Female" <?php echo($a); ?> <?php echo($read_only); ?>>
                Male <input type="checkbox" name="Male" <?php echo($b); ?> <?php echo($read_only); ?>>
            </td>

        </tr>
        <tr>
            <td class="left" class="label">
                Which shows do you remember?
            </td>
            <td class="right">
                Miami Vice <input type="checkbox" name="miamivice" class="80"<?php echo($c); ?> <?php echo($read_only); ?> >
                Facts of Life <input type="checkbox" name="factsoflife"class="80" <?php echo($d); ?> <?php echo($read_only); ?>>
                Growing Pains <input type="checkbox" name="growingpains"class="80" <?php echo($e); ?> <?php echo($read_only); ?>>
            </td>
        </tr>

        <tr>
            <td class="left" class="label" type="hidden">
                Which shows do you remember?
            </td>
            <td>
                Fresh Prince of Bel-Air <input type="checkbox" name="freshprince" class="90" <?php echo($f); ?> <?php echo($read_only); ?>>
                Roseanne <input type="checkbox" name="roseanne" class="90" <?php echo($g); ?> <?php echo($read_only); ?>>
                Family Matters <input type="checkbox" name="familymatters" class="90" <?php echo($h); ?> <?php echo($read_only); ?>>
            </td>
        </tr>
        <tr>
            <td class="left" class="label" type="hidden">
                Which shows do you remember?
            </td>
            <td>
                The Office <input type="checkbox" name="theoffice" class="00" <?php echo($i); ?> <?php echo($read_only); ?>>
                Will & Grace <input type="checkbox" name="willandgrace" class="00" <?php echo($j); ?> <?php echo($read_only); ?>>
                American Idol <input type="checkbox" name="americanidol" class="00" <?php echo($k); ?> <?php echo($read_only); ?>>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="Edit" <?php echo($save_on); ?>>
                <input type="submit" name="submit" value="Save" <?php echo($edit_on); ?> >
                <input type="submit" name="submit" value="Cancel" <?php echo($edit_on); ?> >
            </td>
        </tr>
    </table>
</form>
<?php

include('../includes/footer.php');
?>