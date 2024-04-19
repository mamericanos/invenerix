<?php
//heading.inc.php
//-------------

//Languages
//**************************************************************************************************
$LANGS = array("EN","FR","IT");

//***********************************************************
//MENU VALUES
//***********************************************************
//English: Used for all languages for weblinks so always listed here.
//define($MAIN_MENU_LINKS,array("SERVICES","SEARCH","CONSULTING","CONTACT US"));
$MAIN_MENU_LINKS = array("SERVICES","SEARCH","CONSULTING","CONTACT US");


//************************************************
//FUNCTIONS
//*************************************************
function checkURLvar($serverName)
{
	global $LANGS;
	
	$value = 0; //Initialize return value

	if ( isset($_GET[$serverName]) ) 
	{
		$sentValue = $_GET[$serverName];
		
		if ( $key = array_search( $sentValue, $LANGS)); // Find key of given value )
		{
			//If sentValue is not in array KEY = NULL
			if ($key != NULL) $value = $key;
			//if ( $value > $number || $value < 0 )  $value = 0;
		}
	}

	return $value;
}

//***********************************************************
//CHECK VARS
//***********************************************************
//Country
define("LANGUAGE_NUMBER",checkURLvar("C"));
//$LANGUAGE_NUMBER = checkURLvar("C");
//define("$LANGUAGE_NUMBER",2);

//Language Text File lang/engText.inc.php
require_once("lang/".$LANGS[LANGUAGE_NUMBER]."text.inc.php");


// ***************************************************************************
// **LANGUAGES
// ****************************************************************************
// * This will come from an include file
// *
/*
switch ($LANGUAGE_NUMBER) {
	case 1:
		// FRENCH
		$Languages = array("anglais","francais","italien");
		$Title = "Cabinet spécialisé dans le recrutement de créatifs, cadres et dirigeants";
		break;
	case 2:
		// ITALIAN
		$Languages = array("inglesse","francesse","italiano");
		$Title = "Ricerca esecutiva globale e recruitment creativo";
		break;
	default:
		// ENGLISH
		$Languages = array("english","french","italian");
		$Title = "Global Executive Search and Creative Recruitment";
}
*/

// ***************************************************************************
//FOOTER - Same for all languages.
define("FOOTER","<footer>&#169; 2018 Invenerix Global Website | <a href='/documents/PrivacyPolicy.pdf'>Privacy Policy</a></footer></div></body></html>");


//****************************************************************************
//* MENU
//****************************************************************************
//For the value in $level get the menu in the variable $list - language defaults to 0-English
function getPageLink($level)
{
	
	global $MAIN_MENU_LINKS;
	
	//Number parameter must a menu item in the variable $list.
	if ( $level<0 || $level > count($MAIN_MENU_LINKS) ) return "";
	
	return ( strtolower(explode(' ',trim($MAIN_MENU_LINKS[$level]))[0]));
}

//Create the Navigation menu. $level will not be a hyperlink
function createMenu($level)
{

  global $MENU_LIST;
  global $LANGS;
  //global $LANGUAGE_NUMBER;
  
  echo "<div id='navigation'>\n<ul>";
  for ($i=0;$i<count($MENU_LIST);$i++)
  {
	  $b = ""; $a = "";
	  
	  echo "\n<li>";
	  
	  if ($level <> $i) 
	  {
		  //$b = "<a href = '/Country/".$$LANGS[$LANGUAGE_NUMBER]."/".strtolower(explode(' ',trim($list[0][$i]))[0])."'>";
		  $b = "<a href = '/Country/".$LANGS[LANGUAGE_NUMBER]."/".getPageLink($i)."'>";
		  $a = "</a>";
	  		if ($i == count($MENU_LIST)-1) $a.= "<a href='https://www.linkedin.com/company/invenerix-global' id='socialmedia'></a>";
	  }
	  
	  echo $b.strtoupper($MENU_LIST[$i]).$a."</li>";
	}
	
	echo "\n</ul>\n</div>\n";
}

//****************************************
//CACHING PREVENTION
//*********************************************************
/*
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
header('Cache-Control: no-store, no-cache, must-revalidate'); 
header('Cache-Control: post-check=0, pre-check=0', FALSE); 
header('Pragma: no-cache');
header('Content-Type: text/html; charset=utf-8');
*/

?>
<!doctype html>
<html>
<head>
<title>Invenerix Global - <?php echo TITLE." ".$MENU_LIST[LANGUAGE_NUMBER]." - ".$LANGUAGES[LANGUAGE_NUMBER];?></title>
<link href="/css/basic.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width,inital-scale=1.0" />
<script language="javascript" src="/js/mobile.js" ></script>
</head>
<body>
	<div id="holder">
		<header>
		<div id="theButton" onClick="clickButton()"></div>
				<ul id="langs">
					<?php
						//Get page name:
						for ($i=0;$i<count($LANGUAGES);$i++) {
							if ($i<>LANGUAGE_NUMBER) {
								//Use the array of the menu names in MENU_LIST to get the menu destinations.
								//  NUM_OF_ITEM_IN_MENU constant variable is hardcoded in the index.php file.
							echo "<li><a href='/Country/".$LANGS[$i]."/".getPageLink(NUM_OF_ITEM_IN_MENU)."'>".$LANGUAGES[$i]."</a></li>";
							}
						}
					?></ul>
			
			<!--<a href="/Country/<?php echo $LANGUAGES[LANGUAGE_NUMBER]; ?>/" id="logo"></a> -->
			<a href="/Country/<?php echo $LANGS[LANGUAGE_NUMBER]; ?>/" id="logo"></a>
			<nav>
				<?php
					createMenu(NUM_OF_ITEM_IN_MENU);
				?>
			</nav>
		</header>