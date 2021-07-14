<?php
	$title="Edit product";
	include 'header.php';
	$id = $_GET['id'];
	$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['name'] == $name){
			$user = $u;
			break;
		}
	}


?>



	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<fieldset>
				<legend>EDIT PRODUCT</legend>
				<table>

					<tr>
						<td>Id</td>
						<td><?=$user['id']?></td>
					</tr>
					<tr>
					
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="HTC"></td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="number" name="number" value="34000"></td>
					</tr>

					<tr>
						<td>Selling Price</td>
						<td><input type="number" name="number" value="37000"></td>
					</tr>

					<td>

                    	<input type="checkbox"><label for="">Display</label><br> <br>
                                                            
                     </td>                                         
                 
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Save"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>