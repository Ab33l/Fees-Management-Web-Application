<?php

	include_once 'user.php';

	if (isset($_POST['btn_save'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city = $_POST['city_name'];	

		$user = new User($first_name, $last_name, $city);
			
		$res = $user->save();

		if ($res) {
			echo "Successfully saved your records";
		} else {
			echo "Could not save your records";
		}

	}

	$users_read = new User('','','');
	$users = $users_read->readAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab 4 Soln</title>
</head>
<body>
	<form method="post">
		<table align="center">
			<tr>
				<td>
					<input type="text" name="first_name" placeholder="First Name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="last_name" placeholder="Last Name">
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="city_name" placeholder="City">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="btn_save"><strong>SAVE</strong></button> 
				</td>
			</tr>
		</table>
	</form>


	<table align="center">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>City</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($user = $users->fetch()) {
				
			?> 
			<tr>
				<td><?php echo $user['first_name']; ?></td>
				<td><?php echo $user['last_name']; ?></td>
				<td><?php echo $user['user_city']; ?></td>
			</tr>

			<?php } ?> 
		</tbody>
	</table>


</body>
</html>