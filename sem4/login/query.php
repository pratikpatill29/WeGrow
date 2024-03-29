<!DOCTYPE html>
<html>
<head>
	<title>Register Your Doubts</title>

    <style>
       
       body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		
		h1 {
			font-size: 36px;
			margin: 30px 0;
            text-align: center;
		}
		

       p{
        font-size:20px;
        text-align: center;
       }


		form {
			background-color: #f9f9f9;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
			width: 500px;
            height: 325px;
			margin: 0 auto;
		}
		
		label {
			display: block;
			font-size: 18px;
			margin-bottom: 10px;
		}
		
		input[type="text"],
		input[type="email"],
		textarea {
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 95%;
		}
		
		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			color: white;
			cursor: pointer;
			font-size: 16px;
			padding: 10px 20px;
			border-radius: 5px;
			float: right;
		}
		
		input[type="submit"]:hover {
			background-color: #45a049;
		}

        </style>
</head>
<body>
	<h1>Register Your Doubts</h1>
	<p>Here only doubts related to the topic will be entertained</p>
	<p>Please fill out the form below to register your doubts:</p>
	
	<?php
		// Check if form has been submitted
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			// Connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "login";
			
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			
			// Prepare and bind SQL statement
			$stmt = $conn->prepare("INSERT INTO doubts (name, email, doubt) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $name, $email, $doubt);
			
			// Set parameters and execute statement
			$name = $_POST['name'];
			$email = $_POST['email'];
			$doubt = $_POST['doubt'];
			
            // Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<p>Please enter a valid email address.</p>";
			} else {
				$stmt->execute();
				echo "<p>Thank you for registering your doubt. We will get back to you as soon as possible.</p>";
			}


			
			// Close database connection and display success message
			$stmt->close();
			$conn->close();
			

		} else {
			
			// Display form
			echo '
			<form method="POST">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required><br>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required><br>
				<label for="doubt">Doubt:</label>
				<textarea id="doubt" name="doubt" required></textarea><br>
				<input type="submit" value="Submit">
			</form>';
			
		}
	?>
</body>
</html>
