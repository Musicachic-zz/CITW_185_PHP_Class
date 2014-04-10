<!doctype html>
<html lang="en-us">

    <head>
        <meta charset="utf-8">
        <title>Teresa's Introduction to PHP</title>
        <link rel="stylesheet" href="css/styles.css" media="screen">	
    </head>
    <?php session_start(); ?>
    <body>

        <div id="page">	<!-- start of page -->			

            <div id="banner">
                <h1>
                    Teresa's "Introduction to PHP" Class Examples
                </h1>
            </div>

            <div id="content"> <!-- start of content -->

                <div id="picture">
                    <img src="images/Teresa200x200.jpg" alt="Teresa Picture"><br>

                </div>

                <h1 id="Mainheader">Teresa's Main Page </h1>

                <div id="navcontainer2">
                    <ul id="indexlist">
                        <li><a href="index.php">Hello World Examples</a>
                            <ul id="subnavlist">
                                <li>
                                    <a href="examples/hello-world.php">Hello World</a>		
                                </li>
                                <li>
                                    <a href="examples/hello-world-show-code.php">Hello World w show code</a>		
                                </li>	
                                <li>
                                    <a href="examples/hello-world-include.php">Hello World w include</a>		
                                </li>
                            </ul>
                        <li>
                            <a href="examples/circal.php">Circle Example</a>		
                        </li>
                        <li>
                            <a href="examples/decision.php">Decision Example</a>		
                        </li>
                        <li>
                            <a href="examples/loops.php">Loop Example</a>		
                        </li>
                        <li>
                            <a href="examples/strings.php">String Example</a>		
                        </li>
                        <li>
                            <a href="examples/arrays.php">Array Example</a>		
                        </li>
                        <li>
                            <a href="examples/functions.php">Functions Example</a>		
                        </li>
                        <li>
                            <a href="examples/web_form.php">Form Example</a>		
                        </li>
                        <li>
                            <a href="examples/pulldata.php">SQL Example</a>		
                        </li>
                        <li>
                            <a href="examples/mysql.php">Another SQL Example</a>		
                        </li>
                    </ul>
                </div>

            </div>	<!-- end of content -->


            <div id="footer" style="background-color:#f4096b; padding: 15px;">
                <p style="color:white">
                    Copyright&copy; <?php echo (date("Y")); ?>  Teresa Potts <br>
                    <?php echo('Session ID = ' . session_id() . ''); ?>
                </p>
            </div>

        </div>	<!-- end of page -->

    </body>
</html> 		<!-- Please NOTE: replace above YOUR/YOU with your name -->
