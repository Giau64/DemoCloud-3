<?php 
    $conn = pg_connect("postgres://ofzusknjpovxgn:18e62c0a0924ee868209e043b1e7c6703f8ca2583f61ddeca48abeec325f18f6@ec2-3-222-11-129.compute-1.amazonaws.com:5432/d7vrudha46muvp");
            or die("Can not connect database".pg_connect_errormessage());
?>