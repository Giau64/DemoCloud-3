<?php 
    $conn = pg_connect("postgres://hqbusrtkreosaq:4c7812db2b808d40e774a9c01882e7e881253bd7f139a9f47cb301c588796440@ec2-54-156-121-167.compute-1.amazonaws.com:5432/d85v0e90ipqggs");
            or die("Can not connect database".pg_connect_errormessage());
?>