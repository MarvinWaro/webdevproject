<?php
    include_once("../dbConnection/mysqlconfig_connection.php");

    $id = $_GET['id'];

    mysqli_query($dbc, "DELETE FROM tblsubject WHERE subject_id='$id'");

    header("Location:../index.php")
?>