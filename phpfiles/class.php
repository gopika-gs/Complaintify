<?php
class demo
{
	function demo()
	{
		switch($_REQUEST['dynamic'])
		{
			case 'home':include_once("index.php");	
				break;
			case 'signup':include_once("phpfiles/signup.php");	
				break;
			case 'aboutus':include_once("phpfiles/aboutus.php");	
			      break;
			case 'contact':include_once("phpfiles/contact.php");
			      break;	
			case 'forget':include_once("phpfiles/forget.php");
			       break;
			case 'feedback':include_once("phpfiles/feedback.php");
			       break;
		    case 'login':include_once("phpfiles/login.php");
			       break;
			
			
	}
	}
	}