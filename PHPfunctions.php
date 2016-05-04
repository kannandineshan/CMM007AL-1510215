<?php
include("connection.php");


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