<?php

/*THIS IS  COMMON PHP TO SWITCH
LANGUAGES AND SET IT AS A COOKIE */
session_start();
header('Cache-control: private'); // IE 6 FIX

function echoButtons()
	{
		$btnLangEn = '<div id="popUpLang" class="animated slideInDown"> <a href="?lang=en" class="langEn">English</a>';
		$btnLangHu = '<a href="?lang=hu" class="langHu">Hungarian</a></div>';
			echo $btnLangEn . $btnLangHu;
		}

if(isSet($_GET['lang']))
	{
	$lang = $_GET['lang'];
	// register the session and set the cookie
	$_SESSION['lang'] = $lang;

	setcookie('lang', $lang, time() + (3600 * 24 * 10));
		echoButtons();
		 echo '<button id="popUpLang-btn" class="btn btn-secondary animated fadeIn" onclick="popUpLang()" alt="Switch Language"></button>';
	}
else if(isSet($_SESSION['lang']))
	{
		$lang = $_SESSION['lang'];
		echoButtons();
		echo '<button id="popUpLang-btn" class="btn btn-secondary animated fadeIn" onclick="popUpLang()" alt="Switch Language"></button>';
	}
else if(isSet($_COOKIE['lang']))
	{
	$lang = $_COOKIE['lang'];
	echoButtons();
	 echo '<button id="popUpLang-btn" class="btn btn-secondary animated fadeIn" onclick="popUpLang()" alt="Switch Language"></button>';
	}

else
	{
		$lang = 'hu';
		echoButtons();
		echo '<button id="popUpLang-btn" class="btn btn-secondary" onclick="popUpLang()" alt="Switch Language"></button>';
	}
//An important string to detect browser language
$langDetect = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($langDetect){
    case "hu":
    $lang_file = 'lang.hu.php';
        break;      
    default:
       $lang_file = 'lang.en.php';
        break;
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;

  case 'hu':
  $lang_file = 'lang.hu.php';
  break;

  default:
  $lang_file = 'lang.en.php';

	}

	include_once 'languages/'.$lang_file;

?>
