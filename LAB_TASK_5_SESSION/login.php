<?php 
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $pass=$_POST['pass'];

        if (preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $name) && strlen($name)>=2 ) {
           
            if ( strpos($pass, '@') || strpos($pass, '#') || strpos($pass, '$') || strpos($pass, '%') && $pass<8){
                echo $name."<br>";
                echo $pass;

            }
            else {
                echo "Username must contain 8 char and  at least one of the special characters (@, #, $, %)";
            }
        }
        else {
            echo"must contain alpha numeric and '_' and contain atleat 2 character";
        }

    }

?>

<center>
        <a href="home.php">Home</a> |
        <a href="login.php">Login</a>|
        <a href="Registration.php">Registration</a>|
        <a href="loginInaDashboard.php">Log in dashboard</a>

    </center>


<html lang="en">

<head>
    <title>Login</title>
</head>

<body>

    <form method="post" action="">
        <fieldset style="width: 300px;">
            <legend>
                <h2>Login</h2>
            </legend>

            <label for="uname">User Name : </label>
            <input type="text" name="name">
            <br>
            <br>

            <label for="password">Password: </label>
            <input type="password" name="pass">
            <br>
            <br>

            <hr>

            <input type="checkbox"><label for="">Remember Me</label>
            <br>
            <br>


            <input type="submit" name="submit"> <a href="forgotpass.php" target="_blank"> <a href="forgotpass.php">Forgot Password? </a></a>
            <br>
        </fieldset>
     
</body>

</html>

