<?php

$db = mysqli_connect('sql111.epizy.com', 'epiz_32147194', '8IfkBV1VTNAQ', 'epiz_32147194_Auth');

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>
