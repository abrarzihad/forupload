
<!DOCTYPE html>
<html>
<head>
	<title>Career Consultancy</title>
	<link rel="stylesheet" href="rf style.css">
</head>
<body>






	<fieldset><legend><h1>Registration Form</h1></legend>
	<br><br>
	<form action="index.php" method="post" enctype="multipart/form-data">


		<label>Type:</label>
		<select name="type"> 
         <option value="Student" selected>Student</option>
         <option value="Alumni">Alumni</option></select>
         <br><br>

		<label>Username:</label>
		<input type="text" name="username" placeholder="Enter your username" required><br><br>

		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		
		
		<label>Email:</label>
		<input type="email" name="email" required><br><br>
		
		<label>University:</label>
		<select name="university"> 
         <option value="buet" selected>BUET</option>
         <option value="kuet">KUET</option>
         <option value="ruet">RUET</option>
         <option value="cuet">CUET</option>
         <option value="sust">SUST</option>
         <option value="iut">IUT</option>
         <option value="du">DU</option>
         <option value="ku">KU</option>
         <option value="ru">RU</option>
         <option value="cu">CU</option>
        </select> 
        <br><br>
<label>Depratment:</label>
<br>
<select name="department">
	<option value="math">MATHEMATICS</option>
	<option value="stat">STATISTICS</option>
	<option value="chem">CHEMISTRY</option>
	<option value="phy">PHYSICS</option>
	<option value="cse" selected>CSE</option>
	<option value="eee">EEE</option>
	<option value="me">ME</option>
	<option value="ce">CE</option>
	<option value="ipe">IPE</option>
	<option value="mme">MME</option>	
</select>
<br><br>
	<label>Batch(HSC):</label>
	<input type="number" name="hscbatch">
	
	<br><br>
<label>Instituitional Identity Card Photo:</label>


	<input type="file" name="file" multiple required>
	<br><br>
	<input type="submit" name="save_user" value="Submit">
	<input type="reset">


	<br><br>
	

	<a href="home.html" class="homelink">Home</a>







		</fieldset>
	</form>

</body>
</html>