<?php 
    require 'dbcon.php';

    if(isset($_POST["create"]))
    {
        $fname = $_POST['fname'];
        $bdate = $_POST['bdate'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];

        $query = "INSERT INTO tbl_student (fname, bdate, gender, email)
                VALUES ('$fname', '$bdate', '$gender', '$email')";

        $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "Student not created.";
        }
        else
        {
            header("Location: index.php");
        }
    }

    if(isset($_POST['edit']))
    {
        $student_id = $_POST['edit'];
        header("Location: edit.php?id=$student_id");
    }
    if(isset($_POST['view']))
    {
        $student_id = $_POST['view'];
        header("Location: view.php?id=$student_id");
    }
  
    if(isset($_POST["update"]))
    {
        $student_id = $_POST['student_id'];

        $fname = $_POST['fname'];
        $bdate = $_POST['bdate'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        
        $query = "UPDATE tbl_student 
                    SET fname='$fname', bdate='$bdate', gender='$gender', email='$email'
                    WHERE id='$student_id'";
        $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "Update failed!";
        }
        else
        {
            header("Location: index.php");
        }
    }

    if(isset($_POST['delete']))
    {
        $student_id = $_POST['delete'];

        $query = "DELETE FROM tbl_student WHERE id='$student_id'";
        $query_run = mysqli_query($con, $query);

        if(!$query_run)
        {
            echo "Student not deleted!";
        }
        else
        {
            header("Location: index.php");
        }

    }

?>