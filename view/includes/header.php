<!DOCTYPE html>
<html> 
<!-- 
	@author Kevin Landry <kevin.landry@etu.univ-st-etienne.fr>
 -->
	<head>
  		<meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  		<link rel="stylesheet" href="view/css/style.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  		<title>Open Factory</title>
  </head>
  <body>
	<nav class="navtop">
  		<div class="carre">
  			<h1>PAGE ADMIN</h1>
  		</div>
      	<div class="login_box">
          	<form method="POST" action="">
            	<input type="text" name="username" placeholder="Username ou email"/>
              	<input type="password" name="pass" placeholder="******">
              	<input type="submit" name="btn_login" class="btn" value="Connexion">
          	</form>
      	</div>
	</nav>
    <?php
    	require 'menu.php';
    ?>
