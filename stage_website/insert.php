<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="orena.php">Go to Home</a>
	<br/><br/>

	<form action="orena.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name1"></td>
			</tr>
			<tr>
				<td>Logo</td>
				<td><input type="file" name="logo"></td>
			</tr>
			<tr>
				<td>Location</td>
				<td><input type="text" name="location"></td>
			</tr>
			<tr>
                <td>Choose_stream</td>
				<td><input type="text" name="stream"></td>
            </tr>
            <tr>
                 <td>Placement_session</td>
				<td><input type="text" name="placement_session"></td>
            </tr>
            <tr>
                 <td>Tpo_s_name</td>
				<td><input type="text" name="Tpo_name"></td>
           </tr>
           <tr>
                 <td>Tpo_s_Email</td>
				<td><input type="text" name="email"></td>
            </tr>
            <tr>
                 <td>Tpo_s_number</td>
				<td><input type="text" name="no"></td>
            </tr>
                 <td></td>
				<td><input type="submit" name="Submit" value="orena"></td>
			</tr>
		</table>
	</form>

	<?php

	Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name1'];
		$logo = $_POST['logo'];
		$locations = $_POST['location'];
        $choose_stream = $_POST['stream'];
        $placement_session = $_POST['placement_session'];
        $tpos_name = $_POST['Tpo_name'];
        $tpos_Email = $_POST['email'];
        $tpos_number = $_POST['no'];


		// include database connection file
		include_once("database.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO'register'('name', 'logo', 'locations', 'choose_stream', 'placement_session', 'tpos_name', `tpos_email`, `tpos_number`) 
		VALUES ('$name','$logo','$locations','$choose_stream','$placement_session','$tpos_name','$tpos_Email','$tpos_number')";
	 
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>