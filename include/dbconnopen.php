<?php

//production database connection
$cnnCDD = mysqli_connect("us-cdbr-azure-east-c.cloudapp.net", "bc6b1b30370246", "1f266f0e", "metaDB")
                    or die ("Error Connecting To The Database Because: " . mysqli_connect_error());

?>
