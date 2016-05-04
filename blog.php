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
        </section>



        <!-- (START OF NAV) - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <section class="headercontainer" id="nav-index">

            <nav>

                <ul>
                    <li><a href="blog.php">All Blog Items</a> </li>
                    <li><a href="blog.php">Work Blog Items</a> </li>
                    <li><a href="blog.php">University Blog Items</a> </li>
                    <li><a href="blog.php">Family Blog Items</a> </li>
                    <li><a href="add.php">Insert Blog Items</a> </li>
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

            <?php

            $success = $_GET["Success"];

            if ($success == "Yes") {
                echo "<SCRIPT>alert('New Item Has Been Added To The Database!!!');</SCRIPT>";

                $result = getitemsdetails();

                if (mysqli_num_rows($result) > 0) {

                    $counter = 0;

                    while ($row = mysqli_fetch_array($result)) {

                        $counter++
                        ?>
                        <section class="content">

                            <section class="title"> entryTitle:</section> Today<?php echo $entryTitle; ?>


                            <section class="title">submitter:</section> <?php echo $row['submitter']; ?>


                            <section class="title">category:</section><?php echo $row['category']; ?>


                            <section class="title"> entrySummary:</section><?php echo $row['entrySummary']; ?>

                        </section>
                        <br>

                        <?php

                    }//end of for loop
                }//end if statement



            } elseif ($success == "No") {
                echo "<script>alert('Item With This Name Already Exists In The Database');</script>";

                $result = getitemsdetails();

                if (mysqli_num_rows($result) > 0) {

                    $counter = 0;

                    while ($row = mysqli_fetch_array($result)) {

                        $counter++;
                        ?>
                        <section class="content">

                            <section class="title"> entryTitle:</section> Today<?php echo $entryTitle; ?>


                            <section class="title">submitter:</section> <?php echo $row['submitter']; ?>


                            <section class="title">category:</section><?php echo $row['category']; ?>


                            <section class="title"> entrySummary:</section><?php echo $row['entrySummary']; ?>

                        </section>
                        <br>

                        <?php

                    }//end of for loop
                }//end if statement


            } elseif ($success == null) {
                $result = getitemsdetails();

                if (mysqli_num_rows($result) > 0) {

                    $counter = 0;

                    while ($row = mysqli_fetch_array($result)) {

                        $counter++;
                        ?>
                        <section class="content">

                            <section class="title"> entryTitle:</section> Today<?php echo $entryTitle; ?>


                            <section class="title">submitter:</section> <?php echo $row['submitter']; ?>


                            <section class="title">category:</section><?php echo $row['category']; ?>


                            <section class="title"> entrySummary:</section><?php echo $row['entrySummary']; ?>

                        </section>
                        <br>

                        <?php

                    }//end of for loop
                }//end if statement
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
