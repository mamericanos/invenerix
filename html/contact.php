<?php
//****************************************
//CONTACT TOP MENU
//-------------------------

Define("NUM_OF_ITEM_IN_MENU",3);

//THIS VALUE can be set from the value in the URL
//  /Country/EN/contact
//   find the key that matches contact

//                                 0        1          2           3
//   $MAIN_MENU_LINKS = array("SERVICES","SEARCH","CONSULTING","CONTACT US");
//    NUM_OF_ITEM_IN_MENU = 3

//contactEN.inc.php   // Instead of including the text it is here in the 3 languages.
//-------------
//
/*
$t[0] = " - Contact";
$t[1] = " - Contact French";
$t[2] = " - Contact Italian";
*/

include "heading.inc.php";

?>

<article>
			<section><h1><?php echo CONTACT; ?></h1></section>
			<section><h3><?php echo ADDRESS; ?></h3>103 rue de Grenelle<br />
75007 Paris</section>
			<section><h3><?php echo PHONE_NUMBER; ?></h3>+33(0)1 72 77 43 84</section>
			<section class="fill"><h3><?php echo EMAIL_US; ?>:</h3>
<a href="mailto:contact@invenerix.com?subject=<?php echo SUBJECT_OF_EMAIL; ?>">contact@invenerix.com</a></section>
</article>
<?php echo FOOTER; ?>