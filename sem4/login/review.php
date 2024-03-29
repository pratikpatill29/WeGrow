<!DOCTYPE html>
<html>
<head>
	<title>Interactive Review System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<style>

body {
  font-family: Arial, sans-serif;
}

h1, h2 {
  text-align: center;
}

textarea {
  width: 100%;
  height: 100px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: background-color 0.3s ease-in-out;
}

textarea:focus {
  background-color: #f2f2f2;
}



button {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

button:hover {
  background-color: #0056b3;
}

#reviews {
  margin-top: 50px;
}

        </style>
    
    <script>
	$(document).ready(function(){
		$("#submit").click(function(){
			var rating = $("input[name='rating']:checked").val();
			var comment = $("#comment").val();
			$.ajax({
				url: "submit_review.php",
				method: "POST",
				data: {rating: rating, comment: comment},
				success: function(data){
					alert(data);
					location.reload();
				}
			});
		});
	});
	</script>
</head>
<body>
	<h1>HARVESTING SUCCESS</h1>
	<p>Please rate this website out of 5:</p>
	<input type="radio" name="rating" value="1">1
	<input type="radio" name="rating" value="2">2
	<input type="radio" name="rating" value="3">3
	<input type="radio" name="rating" value="4">4
	<input type="radio" name="rating" value="5">5
	<br><br>
	<textarea id="comment"></textarea>
	<br><br>
	<button id="submit">Submit</button>
	<br><br>
	<div id="reviews">
		<h2>Reviews:</h2>
		<?php
		// Connect to database
		$conn = mysqli_connect("localhost", "root", "", "login");

		// Retrieve reviews
		$result = mysqli_query($conn, "SELECT * FROM reviews");
		while($row = mysqli_fetch_assoc($result)){
			echo "<p>Rating: " . $row['rating'] . " out of 5</p>";
			echo "<p>Comment: " . $row['comment'] . "</p>";
			echo "<hr>";
		}

		// Close connection
		mysqli_close($conn);
		?>
	</div>
</body>
</html>
