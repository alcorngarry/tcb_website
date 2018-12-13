<!DOCTYPE html>
<html lang="en">
<head>
	<title>Truman Club Baseball</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="tcb_style.css">
	<meta charset="utf-8">
</head>
<body>
	
	
	<div class="navbar" id="navbar">
		<img src="tcu.png" alt="truman_logo">
		<h2>Truman Club Baseball</h2>
		<ul>
			<li><a href="#home" id="h">Home</a></li>
			<li><a href="#roster" id="r">Roster</a></li>
			<li><a href="#schedule" id="sc">Schedule</a></li>
			<li><a href="#stats" id="st">Statistics</a></li>
			<li><a href="#join" id="j">Join</a></li>
		</ul>
	</div>

	<div class="text_panel">
		<h1 id="home">Home</h1>
		<hr>
		This is the official site of the Truman State Club Baseball team. We are an affiliated member of the National Club Baseball Association playing in the Mid-America Region - South Conference. Our home games are played at North Park Field in Kirksville Missouri. As of 2018 our organization has become a division 1 team and will compete against large schools such as Kansas University, Mizzou, St.Louis University, Nebraska, and SIUE. 
	</div>

	<div class="text_panel">
		<img id="image_slider" src="tcb1.jpg" alt="tcb_photo_slider">
	</div>

	<div class="text_panel">
		<h1 id="roster">Roster</h1>
		<hr>
		<ul>
			<li>Austin Watson (President)</li>
			<li>Austin Brooks</li>
			<li>Brett Balzraine</li>
			<li>Daniel West</li>
			<li>Dillon Gilbert (Head Coach)</li>
			<li>Garry Alcorn</li>
			<li>Jake Bertish (Risk Manager)</li>
			<li>Jake Koons</li>
			<li>Jared Bacardi (Vice President)</li>
			<li>Jared Littlefield</li>
			<li>Jon Heckel</li>
			<li>Josh Berglar</li>
			<li>Josh Watson</li>
			<li>Landon Motley (Assistant Coach)</li>
			<li>Matt McElrath</li>
			<li>Michael Hall (Statistician)</li>
			<li>Spencer Black</li>
		</ul>
	</div>

	<div class="text_panel">
		<h1 id="schedule">Schedule</h1>
		<hr>
		<h2>Series 1 Against Mizzou</h2>
		<ul>
			<li>Game 1: 02/25/2019 - 03/03/2019 at Mizzou</li>
			<li>Game 2: 02/25/2019 - 03/03/2019 at Mizzou</li>
			<li>Game 3: 02/25/2019 - 03/03/2019 at Mizzou</li>
		</ul>
		<h2>Series 2 Against Kansas</h2>
		<ul>
			<li>Game 4: 03/18/2019 - 03/24/2019 at Kansas</li>
			<li>Game 5: 03/18/2019 - 03/24/2019 at Kansas</li>
			<li>Game 6: 03/18/2019 - 03/24/2019 at Kansas</li>
		</ul>
		<h2>Series 3 Against SIUE</h2>
		<ul>
			<li>Game 7: 03/25/2019 - 03/31/2019 at Truman</li>
			<li>Game 8: 03/25/2019 - 03/31/2019 at Truman</li>
			<li>Game 9: 03/25/2019 - 03/31/2019 at Truman</li>
		</ul>
		<h2>Series 4 Against St. Louis University</h2>
		<ul>
			<li>Game 10: 04/08/2019 - 04/14/2019 at Truman</li>
			<li>Game 11: 04/08/2019 - 04/14/2019 at Truman</li>
			<li>Game 12: 04/08/2019 - 04/14/2019 at Truman</li>
		</ul>
		<h2>Series 5 Against Nebraska</h2>
		<ul>
			<li>Game 13: 04/22/2019 - 04/28/2019 at Truman</li>
			<li>Game 14: 04/22/2019 - 04/28/2019 at Truman</li>
			<li>Game 15: 04/22/2019 - 04/28/2019 at Truman</li>
		</ul>
	</div>

	<div class="text_panel">
		<h1 id="stats">Statistics</h1>
		<hr>
		2019 spring season is just around the corner. Stats of each game will be listed here when the season starts.
	</div>

	<div class="text_panel">
		<h1 id="join">Join Us</h1>
		<hr>
		Do you love baseball? Did you play on a high school team? Did you play on a travel team? 
		Come out to North Park Baseball Complex (Just past Walmart on the right-hand side) on September 6th, 8th
		and 10th from 6pm to 8:30pm for our tryouts! We play other college teams in Missouri in the spring. Please e-mail us
		with any questions.

		<p>
			Please fill out the form below with your information if you are interested in joining and want to also recieve
			e-mails pertaining to the Truman Club Baseball Organization.
		</p>

		<form class="interest_form" action="tcb.php" method="post">
			<p>
				<div> Full Name: </div>
				<input type="text" name="fname"> <input type="text" name="lname"><br>
				<div> Email: </div> 
				<input type="text" name="email"> 
				<div> Phone Number: </div>
				<input type="tel" name="phone"><br>
				<input type="submit">
			</p>
		</form>
		
		<p>
		<?php
			$tcbdb = new PDO("mysql:host=mysql.truman.edu; dbname=gda2438CS315" , 
		"gda2438", "thoenahd");

			$first_name = $tcbdb->quote(htmlspecialchars($_POST["fname"]));
			$last_name =  $tcbdb->quote(htmlspecialchars($_POST["lname"]));
			$email = htmlspecialchars(($_POST["email"]));
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			$phone =  $tcbdb->quote(htmlspecialchars($_POST["phone"]));

			$valid_form = array(0, 0, 0);

			if( !empty($_POST["fname"]) || !empty($_POST["lname"]) )
			{
				if( !preg_match("/[a-zA-Z]+/", $first_name) || !preg_match("/[a-zA-Z]+/", $last_name))
				{
					echo("<em>Make sure you enter a valid name.</em><br>");
				}
				else 
				{
					$valid_form[0] = 1;
				}
			}

			if( !empty($_POST["email"]))
			{
				if( filter_var( $email, FILTER_VALIDATE_EMAIL) === false )
				{
					echo("<em>Make sure you enter a valid email.</em><br>");
				}
				else 
				{
					$valid_form[1] = 1;
				}
			}

			if( !empty($_POST["phone"]))
			{
				if( !preg_match("/\d{3}-\d{3}-\d{4}/", $phone))
				{
					echo("<em>Make sure you use the format xxx-xxx-xxxx for phone numbers</em><br>");
					
				}
				else 
				{
					$valid_form[2] = 1;
				}
			}


			if( $valid_form[0] == 1 && $valid_form[1] == 1 && $valid_form[2] == 1) {
				echo 'Thank you ' . $first_name . ' for showing interest! Your information has been sent.';
				
				$stmt = $tcbdb->prepare("INSERT INTO tcb (fname, lname, email, phone) VALUES (:fname, :lname, :email, :phone)");
				$stmt->bindParam(':fname', $first_name);
   			    $stmt->bindParam(':lname', $last_name);
    			$stmt->bindParam(':email', $email);
    			$stmt->bindParam(':phone', $phone);

				$stmt-> execute();
			}
		?>
		</p>
	</div>
	<script src="tcb.js"></script>
</body>