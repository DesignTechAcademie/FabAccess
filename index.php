<?php

require_once 'config.inc.php';
require_once 'common.inc.php';

require 'view/includes/header.php';

if (isset($_GET['page']) && $_GET['page'] == 'signup') {
    require 'controller/signup.php';
} elseif (isset($_GET['page']) && $_GET['page'] == 'login') {
    require 'controller/login.php';
} else {
    require 'controller/index.php';
}

require 'view/includes/footer.php';

?>