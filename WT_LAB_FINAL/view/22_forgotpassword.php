

<?php 

session_start();
            $file=fopen('../controller/users.txt', 'r');
            $data=fread($file, filesize('../controller/users.txt'));
            $user=explode('|', $data);

?>


<html>
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
</head>
<body>
    
     <h4>Password: <?php print_r($user[1]);  ?> </h4>
</body>
</html>