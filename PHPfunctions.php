<?php
include("connection.php");



include("connection.php");


function getheader(){

    $header = $_GET["header"];

    echo $header;
}



function getitemsdetails(){

    $category = $_GET["category"];


    if($category == null){

        $sql = "SELECT * FROM blogView";

        $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        $result = mysqli_query($db,$sql);

        $db->close();

        return $result;
    }else{

        $sql = "SELECT * FROM blogView WHERE category = '$category'";

        $db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        $result = mysqli_query($db,$sql);

        $db->close();

        return $result;
    }
}






function additemsdetails(){


    if($db->connect_errno){
        die('Connection failed:'.connect_error);
    }
    else {


        //read input details from add.php
        $entryTitle = $_POST['entryTitle'];


        //create select statement to using entrytitle
        $query = "SELECT `entryTitle` FROM `blogView` WHERE `entryTitle` ='$entryTitle' LIMIT 1";

        $db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        //check to see that sql query executes properly, and return any errors
        $output = $db->query($query) or die("Error: " . $query . "<br>" . $db->error);

        $return = NULL;

        //go through the array of results returned from the query if any
        while ($row = $output->fetch_assoc()) {
            $return = $row["entryTitle"];//add the title value to the return variable
        }


        //if $return is no longer NULL, then it means item exists already
        if (isset($return)) {
            header("Location: blog.php?Success=No");
        } else {


            $entryTitle = $_POST["entryTitle"];
            $entrySummary = $_POST["entrySummary"];
            $category = $_POST["category"];
            $submitter = $_POST["submitter"];

            $sql = "INSERT INTO `blogView` (`entryTitle`, `entrySummary`, `category`, `submitter` ) VALUES ('$entryTitle', '$entrySummary', '$category', $submitter)";

            $db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            $result = mysqli_query($db, $sql) or die("Error: " . $sql . "<br>" . $db->error);

            $db->close();

            header("Location: blog.php?Success=Yes");

        }
    }
}
