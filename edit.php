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

        <form action="code.php" method="post">
            <div class="container mt-4 p-5">
                <div class="row  p-5 mb-5">
                    <div class="col-10">
            <input type="hidden" name="student_id" value="<?php echo $student['id']; ?>">
            <div class="container  mt-4 p-5">
        <div class="row ">
            <div class="m-auto form-control p-5 mb-5"> 
            <div class="col-10">
                     <div class="mb-3">
                     <label for="exampleInputname" class="form-label"><strong>Name</strong></label>
                      <input type="name" name="fname" class="form-control" id="fname" aria-describedby="emailHelp"value="<?php echo $student['fname']; ?>">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputemail" class="form-label"><strong>Email</strong></label>
                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $student['email']; ?>">
                    </div>    
            </div>
            <div class="container">
            <div class="row">
                <div class="col-2">
                <label for="exampleinput2"><strong>Birthday</strong></label>
                <input type="date" name="bdate" id="start" class="" name="trip-start" value="dd/mm/yyyy" min="1900-01-01" max="2022-12-31" value="<?php echo $student['bdate']; ?>" required />
                </div>    
                </div>
            </div>
            <div class="col-8  text-end p-4 mb-5">
                        <input class="form-check-input" type="radio" name="gender" id="gender" value="Male"<?php echo $student['gender'] == "Male" ? "checked" : ""; ?>>
                      <label class="form-check-label" for="flexRadioDefault1">
                       <strong>Male</strong>
                       <input class="form-check-input" type="radio" name="gender" id="gender" value="Female"<?php echo $student['gender'] == "Female" ? "checked" : ""; ?>>
                       <label class="form-check-label" for="flexRadioDefault1">
                        <strong>Female</strong>
                       </label>
            </div>
            <div class="container text-end">
            <div class="row">
                <div class="col-10" >
                  <input type="submit" value="Submit" name="update" class="btn btn-primary">
                  <a href="index.php"><input type="button" value="Cancel" class="btn btn-primary"></a>
                </div>
                <div class="col-3"></div>
                    </div>
                </div>
            </div>
        </form><br><br>

        <?php

    }
    else
    {
        echo "No data found.";
    }
    
    ?>