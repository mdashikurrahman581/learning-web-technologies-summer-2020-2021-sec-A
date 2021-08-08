<?php 
session_start();

            $file=fopen('../controller/users.txt', 'r');
            $data=fread($file, filesize('../controller/users.txt'));
            $user=explode('|', $data);


if( isset($_COOKIE['flag'])){

//if( isset($_SESSION['flag'])){
//if ($_SESSION['flag'] == 'true'){

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Home Page</title>
</head>
<body>


	






</body>
</html>


<?php 


}

else
{
header('location: ../view/22_login.php'); 
}

?>


<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>

<table border="1" width = "100%">
	<tr Height="50px">
		<td width= "100px"><img src="../images/logo.jpg" height="100px" width="100px" |></td>



		<td align="right" colspan="2"><h1 align="center">Employee Details</h1><h4>Welcome! <?php print_r($user[0]);  ?>  </h4><a href="../22_home_page.php" >Home</a> | <a href="../view/22_registration.php">Registration</a> |  <a href=" ../controller/logout.php" > Logout</a> </td> 
		 
	</tr>

	<tr height="450px">
		<td>
			 <ul>
			   
			      <a href="../3_update.php"> <li>Update employee</li> </a>
			       <a href="../4_delete.php"> <li>Delete employee</li> </a>
			        <a href="../5_search.php"> <li>Search employee</li> </a>
			        

		     </ul>
	   </td>
		<td colspan="2"><img src="images/t.jpg" height="100px" width="100px" align="right"></td>
		
	</tr>
	<tr>
		<td colspan="3" align="center">copyright@2021</td>
	
	</tr>
</table>




</body>
</html>