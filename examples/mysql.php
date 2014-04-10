<?php
session_start();
include('../includes/header.php');

include('../includes/footer.php');
?>

<form action="<?php echo($self); ?>" method="post">
    <table>
        <thead>
            Recommended Music List
            <tr>
                <td class="left" class="label">
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
                <td class="left" class="label">
                    Album:
                </td>
                <td class="right">
                    <input type="text" size="30" name="album" value="<?php echo($album); ?>" <?php echo($read_only); ?> >
                </td>
                </td>
                <td class="left" class="label">
                    Year:
                </td>
                <td class="right">
                    <input type="text" size="30" name="album" value="<?php echo($year); ?>" <?php echo($read_only); ?> >
                </td>
                <td class="left" class="label">
                    Genre:
                </td>
                <td class="right">
                    <input type="text" size="30" name="genre" value="<?php echo($genre); ?>" <?php echo($read_only); ?> >
                </td>
                <td class="left" class="label">
                    CD Cover Art:
                </td>
                <td class="right">
                    <input type="text" size="30" name="cd_cover" value="<?php echo($cd_cover); ?>" <?php echo($read_only); ?> >
                </td>
            </tr>
        </thead>
    </table>
</form>