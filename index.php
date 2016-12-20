<?php

	require 'view/includes/header.php';

	if(isset($_GET['page']) && $_GET['page'] == 'signup'){
  		require 'controller/user/signup.php';
	}

	elseif(isset($_GET['page']) && $_GET['page'] == 'login'){
  		require 'controller/user/login.php';
	}

	else{
  		require 'controller/user/index.php';
	}

	require 'view/includes/footer.php';
