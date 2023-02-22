<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body background = images/wall9.jpg>
   <h2 class="reg">Register for a course and start your journey learning chinese</h2>
   
    <div class="register">	
		
           <form class="registerr" action="formular2.php" method = "post">
           
            <input type="text" name="name" placeholder="Name">
            <br><br>
            <input type="text" name="telephone" placeholder="Telephone">
            <br><br>
            <input type="email" name="email" placeholder="e-mail">
            <br><br>
            
            <select name="courseType" id="courseType">
				<option selected="selected">Course Type</option>
				<option >HSK1</option>
				<option >HSK2</option>
				<option >HSK3</option>
				<option >HSK4</option>
				<option >HSK5</option>
				<option >HSK6</option>
				
			</select>
           <br><br>
           
            <input type="submit" value="Submit">
            
            </form>
            
    </div>
    
</body>
</html>