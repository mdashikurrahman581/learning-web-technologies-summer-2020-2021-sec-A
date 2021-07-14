<?php
		$title = 'Home page';
		require_once('header.php');

		
		$_SESSION['users'] = [
			['id'=>1,'name'=>'Samsung', 'profit'=>'5000',],
			['id'=>2,'name'=>'Nokia', 'profit'=>'1500',],
			['id'=>3,'name'=>'Xiaomi', 'profit'=>'3300',],
			
		];

	?>

	<h1>Welcome home! <?=$_SESSION['username']?> </h1>

	<nav>
		<a href="create.php">Create User</a> |
		<a href="view_users.php">View Users</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>

	<br>
	<br>
	<br>

	<div>
		
	</div>

<?php include('footer.php'); ?>