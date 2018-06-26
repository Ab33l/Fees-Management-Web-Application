<?php
	
	include_once 'DBConnector.php';
	include_once 'user.php';

	$con = new DBConnector;

	if (isset($_POST['btn_save'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city = $_POST['city_name'];

		$username = $_POST['username'];
		$password = $_POST['password'];

		$utc_timestamp = $_POST['utc_timestamp'];
		$offset = $_POST['time_zone_offset'];		

		$user = new User($first_name, $last_name, $city, $username, $password, $utc_timestamp, $offset);

		if ($user->isUserExist($username)) {
			$user->createFormErrorSessions("Username is unavailable");
			header("Refresh:0");
			die();
		}

		if (!$user->validateForm()) {
			$user->createFormErrorSessions("All fields are required");
			header("Refresh:0");
			die();
		}
			
		$res = $user->save();

		if ($res) {
			echo "Save operation was successful";
		} else {
			echo "An error occured!";
		}

		$con->closeDatabase();
	}

	$users_read = User::create();
	$users = $users_read->readAll();

	$count_users = mysqli_num_rows($users);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab 1</title>
	<link rel="stylesheet" type="text/css" href="validate.css">
	<script type="text/javascript" src="validate.js"></script>


	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="timezone.js"></script>
</head>
<body>
	<form method="post" name="user_details" id="user_details" onsubmit="return validateForm()" action="<?=$_SERVER['PHP_SELF']?>">
		<table align="center">
			<tr>
				<td>
					<div id="form-errors">
						<?php
							session_start();
							if (!empty($_SESSION['form_errors'])) {
								echo " " . $_SESSION['form_errors'];
								unset($_SESSION['form_errors']);
							}
						?>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="first_name" placeholder="First Name" required>
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
					<input type="text" name="username" placeholder="Username">
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="password" placeholder="password">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" name="btn_save"><strong>SAVE</strong></button> 
				</td>
			</tr>
			<input type="hidden" name="utc_timestamp" id="utc_timestamp" value="">
			<input type="hidden" name="time_zone_offset" id="time_zone_offset" value="">
			<tr>
				<td>
					<a href="login.php">Login</a>
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
				<th>UTC Timezone</th>
				<th>Offset</th>
			</tr>
		</thead>
		<tbody>
			<?php for ($i=0; $i < $count_users; $i++) { 
				$user = mysqli_fetch_assoc($users);
			?> 
			<tr>
				<td><?php echo $user['first_name']; ?></td>
				<td><?php echo $user['last_name']; ?></td>
				<td><?php echo $user['user_city']; ?></td>
				<td><?php echo $user['user_utc']; ?></td>
				<td><?php echo $user['offset']; ?></td>
			</tr>

			<?php } ?> 
		</tbody>
	</table>


</body>
</html>