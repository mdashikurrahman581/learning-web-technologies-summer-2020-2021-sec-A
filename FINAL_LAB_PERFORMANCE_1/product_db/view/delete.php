<?php
	$title="Delete Product";
	include 'header.php';

	$id = $_GET['id'];
	$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['id'] == $id){
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
			<input type="hidden" name="id" value="<?=$user['id']?>">
			<legend>DELETE PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><?=$user['name']?></td>
				</tr>
				<tr>
						<td>Buying Price</td>
						<td><input type="number" name="number" value="<?=$user['number']?>"></td>
					</tr>

					<tr>
						<td>Selling Price</td>
						<td><input type="number" name="number" value="<?=$user['number']?>"></td>
					</tr>
				<tr>
					<td>Displayable</td>
					<td><h3>YES</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Delete"></td>
				</tr>
			</table>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>