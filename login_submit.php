<?php
   session_start();
    $conn = mysqli_connect("127.0.0.1","root","","op");

    if(!$conn)
    {
        echo " Connection Failed !!" . mysqli_connect_error();
    }

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(!$result)
    {
        echo "Error:" . mysqli_error($conn);
    }

    $row = mysqli_fetch_assoc($result);
    if($row)
    {
        setcookie("user_id",$row['id'],time()+3600);
        setcookie("name",$row['name'],time()+3600);

        echo " Hello" . $row['name'];
        ?>
        <a href="dashboard.php">Click Here</a>
        <?php
    }
    else{
        echo "Account Not Found";
    }
?>