<?php

    $con = mysqli_connect("localhost", "root", "", "sample");

    if(!$con)
    {
        echo mysqli_connect_error();
    }
    else
    {
        //echo "Connected!";
    }

?>