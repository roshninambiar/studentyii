<html>
	<head>
		<title>ALUMNI FORM</title>
		<style type="css">
			/*tr{
				padding-top: 20px;
				padding-bottom: 20px;
			}*/

		</style>
	</head>
	<body>
		<form action="insert.php" method="post" style="padding:15px;">
				<h1 style="color: #ff9999; padding-left: 450px;">WELCOME TO THE ALUMNI PORTAL</h1>
				<fieldset style="padding-left: 600px;">
				<table>
				<tr><td>Name</td><td><input type="text" name="name"></td></tr>
				<tr><td>Email</td><td><input type="email" name="email"></td></tr>
				<tr><td>Gender</td><td>Male: <input type="radio" name="gender" value="male"> &nbsp; &nbsp; &nbsp; Female: <input type="radio" name="gender" value="female"></td></tr>
				<tr><td>
						City
					</td>
					<td>
						<select>
							<option value="Mumbai">Mumbai</option>
							<option value="Chennai">Chennai</option>
							<option value="Bangalore">Bangalore</option>
							<option value="Delhi">Delhi</option>
							<option value="Kolkata">Kolkata</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Company</td>
					<td><input type="text" name="company"></td>
				</tr>
				<tr><td style="padding-left: 120px;"><input type="button" name="submit" value="Submit"></td></tr>
				</table>
				</fieldset>
		</form>
	</body>
</html>