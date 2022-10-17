<?php

//check existence of id parameter before processing
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){

    require_once "connection.php";

    //prepare statement
    $sql = "SELECT * FROM resources WHERE id = 5";

    if($stmt = mysqli_prepare($con, $sql)){
        //bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        //set parameters
        $param_id = trim($_GET["id"]);

        //try to execute prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){

                //fetch result row as array
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                //retreive individual field value
                $id = $row["id"];
                $topic = $row["topic"];
                $description = $row["description"];
                $type = $row["type"];
                $keywords = $row["keywords"];
                $link = $row["link"];
            }else{
                //URL doesn't contain valid id parameter. Display error
                header("location: index.php");
                exit();
            }
        }else{
            echo "Error! Resource Cannot Be Viewed.";
        }
    }

    //close statement
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Resource</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Resource</h1>
                    <div class="form-group">
                        <label>Topic</label>
                        <p><b><?php echo $row["topic"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p><b><?php echo $row["description"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Resource Type</label>
                        <p><b><?php echo $row["type"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Resource URL</label>
                        <p><b><?php echo $row["link"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>