

<?php 

session_start();
   $file=fopen('controller/users.txt', 'r');
            $data=fread($file, filesize('controller/users.txt'));
            $user=explode('|', $data);



?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table border="1" width="100%" Height="100px">
		
		<tr>
			<td width= "100px"><img src="images/logo.jpg" height="100px" width="100px" |></td>
			<td align="right" colspan="2"><h1 align="center">Employee update</h1><h4>Welcome! <?php print_r($user[0]);  ?>  </h4><a href="view/0_home_page.php" >Home</a> | <a href="view/22_registration.php">Registration</a> |  <a href="controller/logout.php" > Logout</a> </td> 
         
		</tr>
	</table>
	

    <table border = "1" width = "100%" align = "center">
   	
    	<tr height="60">
   		
   		   <th width= "40%">Name</th>
   		   <th width="30%">Contract</th>
   		   <th>Update</th>
   	    </tr>

	    <tr align ="center">
   		
   		   <td align="left"> 1. MD. ASHIKUR RAHMAN</td>
   		   <td>37852</td>
   		   <td><i><u><a href="" >Edit</a></u></i></td>
   	    </tr>


   	    <tr align ="center">
   		
   		   <td align="left"> 2.AB YARAB </td>
   		   <td>37852</td>
   		     <td><i><u><a href="" >Edit</a></u></i></td>
   	    </tr>



   	    <tr align ="center">
   		
   		   <td align="left"> 3.MD. SHAKIL KHAN</td>
   		   <td>39852</td>
   		     <td><i><u><a href="" >Edit</a></u></i></td>
   	    </tr>


   	    <tr align ="center">
   		
   		   <td align="left"> 4.MD. YUSUF ALI</td>
   		   <td>37852</td>
   		     <td><i><u><a href="" >Edit</a></u></i></td>
   	    </tr>

    </table>

</form>


</body>
</html>
<tr Height="50px">
		