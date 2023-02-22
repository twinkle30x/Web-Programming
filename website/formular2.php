<?php
	
    $name= $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $courseType = $_POST['courseType'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body background = images/wall8.jpg>
	<div class="register">
	    
	<h1>Form completed</h1>
	<p>Name: <?php echo $name; ?></p>
	<p>Telephone: <?php echo $telephone; ?> </p>
	<p>email: <?php echo $email; ?></p>
	<p>Course Type: <?php echo $courseType; ?> </p>
	</div>
</body>
</html>