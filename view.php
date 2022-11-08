<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php 
    
    require "dbcon.php";

    $student_id = $_GET['id'];
    $query = "SELECT * From tbl_student WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $student = mysqli_fetch_array($query_run);

        ?>
        <div class="form-control container mt-5 p-5 shadow bg-rounded">
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-3 mt-1">
                <h3>Details</h3>
                <br>
                <div class="lead" >Name: <b><?php echo $student['fname']; ?></b></div>
                <br>
                <div class="lead">Birthdate: <b><?php echo $student['bdate']; ?></b></div>
            </div>
            
            <div class="col-3 mt-5 p-4">
                <div class="lead">Email: <b><?php echo $student['email']; ?></b></div>
                <br>
                <div class="lead">Gender: <b><?php echo $student['gender']; ?></b></div>
            </div>
            <div class="container">
                <div class="row box-3">
                    <div class="col-7"></div>
                    <div class="col-3 text-end">
                        <a href="index.php"><button type="button" class="btn btn-dark "><i class="bi"></i>Go Back</button></a>
                    </div>
                </div>
               </div>
               
        </div>
       </div>
        <?php

    }
    else
    {
        echo "No data found.";
    }
    
    ?>