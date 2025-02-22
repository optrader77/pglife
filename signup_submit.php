<?php
   
    $conn = mysqli_connect("127.0.0.1","root","","op");

    if(!$conn){
        echo " Connaction Failed !" . mysqli_connect_error();
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo "Not Success" . mysqli_error($conn);
    }
     else{
    echo "SuccesssFully Registred!!";
     }
    mysqli_close($conn);
    
?>