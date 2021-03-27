<?php

$server = "localhost";
    $user = "root";
    $password = "";
    $db = "blog";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con){
        ?>
            <script>
                alert("connection Successfull");
            </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("connection Failed");
        </script>
    <?php
    }

?>