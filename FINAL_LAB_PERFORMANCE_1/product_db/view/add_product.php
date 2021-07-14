<?php
	$title="View Product";
	include 'header.php';

?>

	

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<fieldset>
				<legend>ADD PRODUCT</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="email" name="email"></td>
					</tr>

					<tr>
						<td>Selling Price</td>
						<td><input type="email" name="email"></td>
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