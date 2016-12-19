<?php

	require 'view/includes/header.php';

	if(isset($_GET['page']) && $_GET['page'] == 'signup'){
  		require 'controller/user/signupController.php';
	}

	elseif(isset($_GET['page']) && $_GET['page'] == 'login'){
  		require 'controller/user/loginController.php';
	}

	else{
  		require 'controller/user/indexController.php';
	}

	require 'view/includes/footer.php';
