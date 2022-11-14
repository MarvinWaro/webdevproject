<?php
    include_once("../dbConnection/mysqlconfig_connection.php");
    if(isse($_POST['update'])) {
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];

        if(empty($code) || empty($name)) {
            if(empty($code)) {
                echo"<font color color='red'>Subject Code field is empty.</font><br/>";
            }
            if(empty($name)) {
                echo "<font color='red'>Subject Name field is empty.</font><br/>";
            }
        }
        else {
            mysqli_query($dbc, "UPDATE tblsubject SET subject_code='$code', subject_name='$name' WHERE subjuect_id='$id'");
            header("Location:../index.php";);
        }
    }
?>