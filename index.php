<?php
include("PHPfunctions.php");

?>


<!DOCTYPE html>
<html lang="en">
<!-- - [START OF HEAD] ============================================================================================= -->
<head>
    <meta charset="UTF-8">

    <title>Home</title>

    <!-- - CSS Stylesheet- -->
    <link rel="stylesheet" href="assets/css/css.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>

</head>
<!-- - [END OF HEAD] ============================================================================================= -->


<!-- - [START OF BODY] ============================================================================================= -->
<body>

<!-- (START OF HEADER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -- - -- - - - -->
<header>
    <section class="container" id="header">


        <section class="headercontainer">
            <h1>myBlog</h1>
            <h3>because the internet needs to know what I think</h3>
            <h3><?php getheader(); ?></h3>
        </section>



        <!-- (START OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <section class="headercontainer" id="nav-index">

            <nav>

                <ul>
                    <li><a href="index.php?header=Home">Home</a> </li>
                    <li><a href="blog.php?header=All Blog Items">All Blog Items</a> </li>
                    <li><a href="blog.php?header=Work Items">Work Blog Items</a> </li>
                    <li><a href="blog.php?header=University Items">University Blog Items</a> </li>
                    <li><a href="blog.php?header=Family Items">Family Blog Items</a> </li>
                    <li><a href="add.php?header=Insert a Blog Item">Insert Blog Items</a> </li>
                </ul>

            </nav>

        </section>

    </section>
    <!-- (END OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

</header>
<!-- (END OF HEADER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - -- - -->



<!-- (START OF MAIN) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<main>

    <section class="container" id="main">


        <section class="container-content" id="content-index">

            <section class="content">

                <p>
                    Suspendisse non lacinia lectus. Fusce pharetra eleifend velit, a vulputate sapien eleifend et.
                    In vehicula tempor est, vitae fringilla metus laoreet ut.
                    Fusce iaculis eu diam congue tempus.
                    Cras consequat mi id eros consequat, sed accumsan ipsum facilisis. Cras semper, lorem et eleifend placerat,
                    lorem ex varius eros, at scelerisque lectus lacus nec risus.
                </p>

            </section>

        </section>


        <!-- (START OF LOGO) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <section class="container-content" id="image-index">

            <img id="logo" src="assets/images/blog.png">

        </section>
        <!-- (END OF LOGO) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    </section>

</main>
<!-- (END OF MAIN) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->



<!-- (START OF FOOTER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<footer>

    <section class="container" id="footer">

        <p>
            Designed by Dineshan Kannan, 2016
        </p>

    </section>

</footer>
<!-- (END OF FOOTER) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

</body>
<!-- - [END OF BODY] ============================================================================================= -->
</html>
