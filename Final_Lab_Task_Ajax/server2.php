  
<?php
	
	$email = $_POST['name'];

	if($email == null){
		echo 'Invalid Data';
	}else{
		echo "UNSUBSCRIBED BY :  ".$email;		
	}

?>