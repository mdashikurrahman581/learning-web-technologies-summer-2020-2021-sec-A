<?php
	$title="View Users";
	include 'header.php';

	$users = $_SESSION['users'];
?>



	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>

	<div>
			<legend>DISPLAY</legend>
		<table border="1">
			<tr>
				
				<td>Name</td>
				<td>PROFIT</td>
				<td></td>
				<td></td>
			</tr>

			<?php  for ($i=0; $i<count($users); $i++) { ?>
				<tr>
					
					<td><?=$users[$i]['name']?></td>
					<td><?=$users[$i]['profit']?></td>
					
					<td>
						<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
						<a href="delete.php?id=<?=$users[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

<?php
	include 'footer.php';
?>