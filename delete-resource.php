<?php

if(isset($_POST["id"]) && !empty($_POST["id"])){
    require_once "connection.php";

    //preparing delete statement
    $sql = "DELETE FROM resources WHERE id = ?";

    if($stmt = mysqli_prepare($con, $sql)){
        //bind variables to prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        //set parameters
        $param_id = trim($_POST["id"]);

        //execute prepared statement
        if(mysqli_stmt_execute($stmt)){
            //resource deleted successfully + redirect to admin page
            header("location: admin.php");
            exit();
        } else{
            echo "Error! Resource Could Not Be Deleted.";
        }
    }

    //close statement
    mysqli_close($con);

}else{
    //check existence of id parameter
    if(empty(trim($_GET["id"]))){
        //URL doesn't contain id parameter. Show error
        header("location: index.php");
        exit();
    }
}


?>