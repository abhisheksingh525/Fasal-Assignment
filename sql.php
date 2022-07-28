<?php

$sql = "CREATE TABLE 'users' (
  'id' int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  'username' varchar(100) NOT NULL,
  'email' varchar(100) NOT NULL,
  'password' varchar(100) NOT NULL
)";



$db = mysqli_connect('sql6.freemysqlhosting.net', 'sql6505634', '76RAG1LBBl', 'sql6505634');

if($conn){
    echo "Successfully connected to server";
}
else{
    echo "Failed";
}

print(mysqli_query($conn,$sql));


?>
