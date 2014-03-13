<?php
include('../includes/header.php');


echo ("<h1>What Decade Are You A Child Of?</h1>");

    $self = htmlspecialchars(basename($_SERVER['SCRIPT_NAME'])); 

/* @var $first_name type */
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : null;
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : null;
    $dob = isset($_POST['dob']) ? $_POST['dob'] : null;
    $female = isset($_POST['female']) ? $_POST['female'] : null;
    $male = isset($_POST['male']) ? $_POST['male'] : null;
?>
<form action="myForm" <?php echo($self); ?>method="post">
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
                <input type="text" size="30" name="first_name" value="<?php echo($last_name); ?>" <?php echo($read_only); ?> > 
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
                Female <input type="checkbox" name="Female" value="<?php echo($female); ?>" <?php echo($read_only); ?>>
                Male <input type="checkbox" name="Male" value="<?php echo($male); ?>" <?php echo($read_only); ?>>
            </td>

        </tr>
        <tr>
            <td class="left" class="label">
                Which shows do you remember?
            </td>
            <td class="right">
                Miami Vice <input type="checkbox" class="80">
                Facts of Life <input type="checkbox" class="80">
                Growing Pains <input type="checkbox" class="80">



            </td>
        </tr>

        <tr>
            <td class="left" class="label" type="hidden">
                Which shows do you remember?
            </td>
            <td>
            Fresh Prince of Bel-Air <input type="checkbox" class="90">
        Roseanne <input type="checkbox" class="90">
        Family Matters <input type="checkbox" class="90">
            </td>
        </tr>
        <tr>
                        <td class="left" class="label" type="hidden">
                Which shows do you remember?
            </td>
            <td>
            The Office <input type="checkbox" class="00">
        Will & Grace <input type="checkbox" class="00">
        American Idol <input type="checkbox" class="00">
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="submit" value="Edit" <?php echo($save_on);?>> 
            <input type="submit" name="submit" value="Save" <?php echo($edit_on);?> > 
            <input type="submit" name="submit" value="Cancel" <?php echo($edit_on);?> >
            </td>
        </tr>
    </table>      
</form>
</body>
<?php
include('../includes/footer.php');
?>