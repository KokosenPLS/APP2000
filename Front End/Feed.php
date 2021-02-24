<!DOCTYPE html>
<html>
<head>
	<title>Innlogging</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="grid-container">	
			<header class="item1">
				<div>
					<img src="bilder\GreenbookLogo.png"	 id="logo-img">
				</div>
			</header>
			<div class="item3">
				<div class="input-box">
					<h1>Logg inn</h1>
					<form method="POST" link>
						<input type="email" name="Fornavn" placeholder="Epost">
						<input type="password" name="passord" placeholder="Passord">
						
						<br><br>
						<a href=""><p id="regText">Registrer deg</p></a>
						<br>
						<button type="" id="reg-knapp">Logg inn</button>
					</form>
					<?php
					echo "<div class = 'arrangement-div'>";

						while (arrangementObject) {
							$bilde = row['bilde'];
							echo "<img src='"$bilde"";
						}

					echo '</div>';
					?>
				</div>
			</div>
			<footer class="item5">
				<div>GreenBook © 2020</div>
			</footer>
	</div>

</body>
</html>