<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chinmay"; 
// for creating a connection object 
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
}
else{
echo "Connection was successful";
}
//creating table
$sql = "CREATE TABLE `phptrip` (
    `sno` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(12) NOT NULL,
    `dest` VARCHAR(6) NOT NULL,
    PRIMARY KEY (`sno`)
)";
$result = mysqli_query($conn, $sql);

if($result){
    echo "The table was created successfully<br>";

}
else{
    echo "The table was not created successfully because of this error---->". mysqli_error
    ($conn);    
}

?>;