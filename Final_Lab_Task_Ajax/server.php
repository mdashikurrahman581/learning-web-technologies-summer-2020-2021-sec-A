  
<?php
	
	$name = $_POST['name'];

	if($name == null){
		echo 'invalid data';
	}else{
		echo "SUBSCRIBED BY :  ".$name;		
	}

?>