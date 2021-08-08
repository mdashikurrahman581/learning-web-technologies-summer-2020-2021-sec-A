<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body>
   <h3>Login Page</h3>
  <form method="post" action="../controller/loginCheck.php"> 
      <fieldset>
     	<legend>Login</legend>

           <table>
	
                <tr>
	
                    <td>Username</td>
                    <td><input type="txt" name="username"></td>
                </tr>


                <tr>
	
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>


                <tr>
	
                    <td>

                    	<input type="checkbox"><label for="">Remember Me</label><br> <br>
                                                            
                     </td>                                         
                 

                    <td><input type="submit" name="submit" value="Submit"></td>

                    <td><a href="../view/22_forgotpassword.php" target="_blank">Forgot Password?</a><br></td>
                                                       
                </tr>

             </table>
     </fieldset>
   </form>
</body>
</html>

 