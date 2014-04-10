<!doctype html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/styles.css" media="screen">	
</head>		 			 

		<?php 	// show code
		
			$self = basename($_SERVER[SCRIPT_NAME]);
			
			echo('<hr class=padding>CODE FOLLOWS<br><br>');					
			highlight_file ($self);
			echo('<hr class=padding>');	
		?>
                <div class="navcontainer">
                    <ul class="navlist">
			<li><a href="../index.php">Back</a></li>
                    </ul>
		</div>
		<p style="background-color:#f4096b; padding: 15px; color:white; margin-bottom: 0px; text-align: center">
                    Copyright&copy; <?php echo (date("Y")); ?>  Teresa Potts <br>
                <?php  echo('Session ID = ' . session_id() . '');  ?>
		</p>

</html>
