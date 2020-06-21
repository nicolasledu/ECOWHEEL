<?php

session_start();

require ('../helpers.php');

if(isset($_GET['controller'])){
	switch ($_GET['controller']){
		case 'category' :
            require 'controllers/categoryController.php';
            break;

        case 'product' :
            require 'controllers/productController.php';
            break;

        case 'register' :
            require 'controllers/registerController.php';
            break;

        case 'login' :
            require 'controllers/loginController.php';
			break; 
			
		case 'user' :
            require 'controllers/userController.php';
			break;
				
        default :
            require 'controllers/indexController.php';
	}
}
else{
	require 'controllers/indexController.php';
}

if(isset($_SESSION['messages'])){
	unset($_SESSION['messages']);	
}
if(isset($_SESSION['old_inputs'])){
	unset($_SESSION['old_inputs']);	
}
