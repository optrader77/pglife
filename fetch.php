<?php 

$conn = mysqli_connect("127.0.0.1","root","","op");

if(!$conn){
    echo "Not Connected!!". mysqli_connect_error();
}

$sql = "SELECT * FROM users";

$result = mysqli_query($conn,$sql);

iF(!$result)
{
    echo "Not Successfull!! " . mysqli_error($conn);
}

while($row = mysqli_fetch_assoc($result))
{
    echo $row['name'] ."</br>";
    echo $row['password'] ."</br>";
}


?>