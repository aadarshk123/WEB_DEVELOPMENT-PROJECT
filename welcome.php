<?php 
	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Welcome</title>
		<link rel="icon" href="https://thumbs.dreamstime.com/z/color-yoga-pose-spiritual-mandala-circle-vector-symbol-illustration-180473431.jpg" type="image/x-icon">
		<link rel="stylesheet" href="prj_main.css">
	</head>
	<body>
		<div class="backimage">
			<header>
				<img src="https://cdn1.vectorstock.com/i/1000x1000/67/35/yoga-meditation-logo-icon-concept-vector-24016735.jpg" class="img1">
				<span><b>Yoga& Meditation</b></span>
			</header>
		</div>
		<div id="php_part">
				<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
		</div>
		<div id="Logout">
			<a href="logout.php">Logout</a>
		</div>
		<div class="p1">
			<h1>Dashboard:</h1>
			<p id="slogans">
				"Yoga is essentially a practise for your soul,<br>
				working through the medium of your body."
			</p>
			<div id="p2">
				<a href="benefits_yoga.html" id="a1">Yoga and it's Benefits.<br><br>
				<a href="diet_yoga.html" id="a2">Healthy Diets For Yoga<br><br>
				<a href="centers.html" id="a3">Best Yoga Center near you.<br><br>
				<a href="https://www.medicalnewstoday.com/articles/319116" id="a4">Read Article on yoga & meditation.<br><br>
				<a href="feedback_form.html" id="a5">Feedback Form 
			</div>
		</div>
	</body>	
</html>
