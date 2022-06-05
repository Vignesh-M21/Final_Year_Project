<?php
    $con = new mysqli('localhost','root','','prorect_data');

    if(!$con){
        die (mysqli_error($con));
    }
?>