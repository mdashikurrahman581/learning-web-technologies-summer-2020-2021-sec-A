<?php 
  session_start();

  if(isset($_POST['submit']))
   { 
     $username= $_POST['username'];
     $password= $_POST['password'];
 
      if($username !='' && $password != '')
       {
       	 // $_SESSION['user']['username']

         //if($_SESSION['user']['username']==$username && $_SESSION['user']['password'] == $password)

            $file=fopen('users.txt', 'r');
            $data=fread($file, filesize('users.txt'));
            $user=explode('|', $data);
            //print_r($user[0]);

           /*if(feof($file)=='false')
           {
          

           
            $data=fgets($file);
            $user=explode('|', $data);
           }*/
              
           if(trim($user[0])==$username && trim($user[1])==$password)
            {
              //print_r($_SESSION);
         	    //echo"Login success...";
         	    //$_SESSION['flag']='true'; 

              
              setcookie('flag', 'true', time()+3600,'/');
         	    if($_SESSION ['user']['type'] =='teacher')
         	    {
         	    	header('location:  ../view/0_home_page.php');
         	    }

                header('location: ../view/0_home_page.php');
            }
            else
            {
            	echo"Invalid username or password...!";
            }
        }
        else
        {
      	  echo"username and password required...!";
        }
    }
    else
    {
	  echo"invalid request....!";
    }
    


   











?>