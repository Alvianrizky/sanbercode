<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buat Account Baru</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome" method="post" accept-charset="utf-8">
		{{ csrf_field() }}
		<p>Firts Name</p>
		<input type="text" name="first" id="first">
		
		<p>Last Name</p>
		<input type="text" name="last" id="last">

		<p>Gender :</p>
		<input type="radio" id="Male" name="gender" value="Male">
		<label for="Male">Male</label><br>
		<input type="radio" id="Female" name="gender" value="Female">
		<label for="Female">Female</label><br>
		<input type="radio" id="Other" name="gender" value="Other">
		<label for="Other">Other</label>

		<p>Nationality :</p>
		<select name="Nationality">
			<option value="Indonesia">Indonesia</option>
			<option value="Singapura">Singapura</option>
			<option value="Australia">Australia</option>
			<option value="Malaysia">Malaysia</option>
		</select>
		
		<p>Language Spoken :</p>
		<input type="checkbox" id="bahasa" name="bahasa" value="bahasa">
		<label for="bahasa">Bahasa Indonesia</label><br>
		<input type="checkbox" id="english" name="english" value="english">
		<label for="english">English</label><br>
		<input type="checkbox" id="other" name="other" value="other">
		<label for="other">Other</label>

		<p>Bio :</p>
		<textarea name="bio" rows="8"></textarea>
		<br>
		<input type="submit" name="" value="Sign Up">
	</form>
</body>
</html>