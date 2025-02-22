<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
    </head>
    <body >
        <!-- <img class="img-body" src="img/login1.jpg"> -->

        <div class="sign">
            <!-- <img class="img-login" src="img/login.jpg"> -->
            <h1 class="head2">Sign-Up</h1>

            <form method="post" action="signup_submit.php">
              Name     :  <input type="text" class="for" name="name"></br></br>
              Email    :  <input type="text" class="for" name="email"></br></br>
              Password :  <input type="password" class="for" name="password"></br>
                
                <!-- <img class="mail" src="img/mail.png">
                <img class="pass" src="img/pass.png"> -->
                <!-- <img class="pass1" src="img/pass.png"> -->

                <input type="submit" class="btn" name="submit" value="Submit">

                <h6 class="bot">Already have an account? <a href="Login.php">Click Here</a></h6>
            </form>
        </div>
    </body>
</html>
