<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->
    </head>
    <body>
        
        <!-- <img class="img-body" src="img/login1.jpg"> -->

        <div class="sign">
            
            <!-- <img class="img-login" src="img/login.jpg"> -->
            <h1 class="head1">Login</h1>

            <form method="post" action="login_submit.php">
                
                Email: 
                <input type="text" placeholder="Enter Your Email-Id" name="email" class="for1">
                <br/><br/>

                Password: 
                <input type="password" placeholder="Enter  Your Password" name="password" class="for2">
                <br/><br/>

                <input type="submit" class="btn2" name="submit1" value="Submit1">

                <!-- <img class="mail" src="img/mail.png"> -->
                <!-- <img class="pass1" src="img/pass.png"> -->

                <h6 class="bot">
                    If you don’t have an account? 
                    <a href="signup.php">Click Here</a>
                </h6>

            </form>

        </div>

    </body>
</html>
