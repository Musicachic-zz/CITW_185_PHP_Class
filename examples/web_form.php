<?php
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

    $option = array();

if(isset($_POST['option']))
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

if ($_POST[$c]== $checked && $_POST[$d]== $checked && $_POST[$e]== $checked)
{
    echo ("You are a child of the 80's");
}

if (isset($c['CHECKED']) && isset($d['CHECKED']) && isset($e['CHECKED']))
{
    echo("You are a child of the 80s");
}

if ([$c]== $checked && [$d]== $checked && [$e]== $checked)
{
    echo ("You are a child of the 80's");
}

if ($_POST[$c]== 'CHECKED' && $_POST[$d]== 'CHECKED' && $_POST[$e]== 'CHECKED')
{
    echo ("You are a child of the 80's");
}

//$step = ($submit == 'Edit') ? 1 : 0;
//if ($step)
//{
//    $edit_on = '';
//    $save_on = 'DISABLED';
//    $read_only = '';
//}
//else
//{
//    $edit_on = 'DISABLED';
//    $save_on = '';
//    $read_only = 'DISABLED';
//}
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
                <input type="date" name="bday" size="30" value="<?php echo($dob); ?>" <?php echo($read_only); ?>>
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