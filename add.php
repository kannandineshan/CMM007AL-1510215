<?php
include("PHPfunctions.php");

?>

<!DOCTYPE html>
<html lang="en">
<!-- - [START OF HEAD] ============================================================================================= -->
<head>
    <meta charset="UTF-8">

    <title>Add Blog Entry Page</title>

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
                    <li><a href="blog.php?header=Work Items&category=work">Work Blog Items</a> </li>
                    <li><a href="blog.php?header=University Items&category=university">University Blog Items</a> </li>
                    <li><a href="blog.php?header=Family Items&category=family">Family Blog Items</a> </li>
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


        <section class="container-content">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'GET') {

                ?>
                <section class="content">

                    <form action="" method="post">

                        <label for="entryTitle">Entry Title:</label>
                        <input required type="text" id="entryTitle" name="entryTitle">
                        <br>
                        <label for="entrySummary">Entry Summary:</label>
                        <textarea required id="entrySummary" name="entrySummary"></textarea>
                        <br>
                        <label for="category">Category:</label>
                        <select required name="category" id="category">
                            <option value="">Select location</option>
                            <option value="work">Work</option>
                            <option value="university">University</option>
                            <option value="home">Family</option>
                        </select>
                        <label for="submitter">Submited By:</label>
                        <input type="text" id="submitter" name="submitter">
                        <br>
                        <br>
                        <input type="submit" value="Submit" id="submit">

                    </form>

                </section>
                <?php
            } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                additemsdetails();

            } else {
                header("Location: index.php");

            }
            ?>


        </section>



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
