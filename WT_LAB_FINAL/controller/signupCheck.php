<?php 

  session_start();

  if(isset($_POST['submit']))
   { 
      $name=$_POST['name'];
      $contract= $_POST['contract'];
      $username= $_POST['username'];
      $password= $_POST['password'];
      $confirmPassword= $_POST['confirmPassword'];
      
      //$gender= $_POST['gender'];
      //$dob= $_POST['day' 'month' 'year'];     
     if($username !='' && $password != '' && $confirmPassword !='' && $contract != '' && $name != '' )
      {

        $user=['username'=>$username, 'password'=>$password,'confirmPassword'=>$confirmPassword, 'email'=>$email,'name'=>$name,'type'=>$type];
       // $_SESSION['user'] = $user;
          $user=$username."|".$password."|".$email."|".$name."|".$type;
        $file=fopen('users.txt', 'w');
        fwrite($file,$user );
        fclose($file);

        if($password == $confirmPassword){
           
        header('location: ../view/22_login.php');}else{echo"Password and confirm password does not match ...!";}
        //echo"Registration done....";
      }
        

      else
      {
        echo"Give the required informations...!";
      }
    }
    else
    {
	   echo"invalid request....!";
    }
    


   











?>