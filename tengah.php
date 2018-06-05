<?php
@$get_page=$_GET['page'];
switch($get_page){

	case"0";
	include"skrip/welcome.php";
	break;
	
	case"10";
	include"loginn.php";
	break;
	
	case"14";
	include"skrip/contact.php";
	break;
	
	default;
	include"skrip/welcome.php";
	break;
	}

?>