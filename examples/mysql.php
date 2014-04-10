<?php
session_start();
include('../includes/header.php');
include('../includes/sql.php');

//Connect to the database.
$conn = mysql_connect($db_host, $db_user, $db_pass) or die('Error connect db: ' . mysql_error());
mysql_select_db($db_name, $conn);

if ($step == 3)    // 'Upload File' option was selected 
{

    echo('<pre>');

    $fileName = $_FILES['userfile']['name'];
    $fileTmpName = $_FILES['userfile']['tmp_name'];
    $fileType = $_FILES['userfile']['type'];
    $fileSize = $_FILES['userfile']['size'] / 1024;
    $fileDest = $path . '/' . $fileName;

    echo('File Name: ' . $fileName . '<br>');
    echo('File Temp Name: ' . $fileTmpName . '<br>');
    echo('File Type: ' . $fileType . '<br>');
    echo('File Size: ' . $fileSize . ' Kb<br>');
    echo('File Destination: ' . $fileDest . '<br>');

    // has file been successfully uploaded to the server? 

    if (is_uploaded_file($fileTmpName))
    {
        echo('SUCCESS: File Uploaded to: ' . $fileTmpName . '<br>');
    } else
    {
        echo('FAILURE: File NOT Uploaded <br>');
    }

    $dest = $path . '/' . $fileName;

    // has file been successfully moved to new home? 

    if (move_uploaded_file($fileTmpName, $fileDest))
    {
        echo('SUCCESS: File Moved to: ' . $fileDest . '<br>');
    } else
    {
        echo('FAILURE: File NOT moved <br>');
    }

    echo('</pre>');
}

?>

<form action="<?php echo($self); ?>" method="post" enctype="multipart/form-data">
    <table>
        <thead>
            Recommended Music List
            <tr>
                <td class = "left" class = "label">
                    Artist Name:
                </td>
                <td class="right">
                    <input type="text" size="30" name="artist" value="<?php echo($artist); ?>" <?php echo($read_only); ?> >
                </td>
                <td class="left" class="label">
                    Song Title:
                </td>
                <td class="right">
                    <input type="text" size="30" name="song_title" value="<?php echo($song_title); ?>" <?php echo($read_only); ?> >
                </td>
            </tr>
            <tr>
                <td class="left" class="label">
                    Album:
                </td>
                <td class="right">
                    <input type="text" size="30" name="album" value="<?php echo($album); ?>" <?php echo($read_only); ?> >
                </td>
                <td class="left" class="label">
                    Year:
                </td>
                <td class="right">
                    <input type="text" size="30" name="album" value="<?php echo($year); ?>" <?php echo($read_only); ?> >
                </td>
            </tr>
            <tr>
                <td class="left" class="label">
                    Genre:
                </td>
                <td class="right">
                    <input type="text" size="30" name="genre" value="<?php echo($genre); ?>" <?php echo($read_only); ?> >
                </td>
            </tr>
            <tr>
                <td class="left" class="label">
                    Upload CD Cover Art:
                </td>
                <td class="right">
                    <input type="file" size="30" name="userfile" value="<?php echo($userfile); ?>" <?php echo($read_only); ?> >
                    <input type="hidden" name="step" value="3"> 
                    <input type="submit" name="submit" value="Upload File" > 
                </td>
            </tr>
        </thead>
    </table>
</form>

<?php

$query = "SELECT * FROM $table2 WHERE id > '0' ";
$result = mysql_query($query) or die("Could not get data: $query " . mysql_error());



mysql_close($conn);
include('../includes/footer.php');
?>