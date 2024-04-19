<?php
//****************************************
//SEARCH TOP MENU
//-------------------------

Define("NUM_OF_ITEM_IN_MENU",1);

//searchEN.inc.php   // Instead of including the text it is here in the 3 languages.

include "heading.inc.php";


//Text
/*
$theText = array(3);
$theText[0] = "EXECUTIVE SEARCH FOCUSING ON THE FOLLOWING AREAS:";
$areas = array(3);
$areas[0] = "Fashion and Luxury";
$areas[1] = "Consumer Goods";
$areas[2] = "Lifestyle";
$areas[3] = "Advertising & Design Agencies";


$theText[1] = "WE WORK ON THE FOLLOWING POSITIONS:";
$positions = array(8);
$positions[0] = "Branding & Graphic Design";
$positions[1] = "Art Direction & Advertising";
$positions[2] = "Architecture & Interior Design";
$positions[3] = "Industrial & Product Design";
$positions[4] = "Digital";
$positions[5] = "Retail, Wholesale & Merchandising";
$positions[6] = "Fashion Design, Product Development & Licensing";
$positions[7] = "General Management";


$theText[2] = "There are a number of ways to shape your search process for maximum flexibility.";
$theText[3] = "For more detailed information, please feel free to contact us directly so we can tailor the search to your needs.";
*/

$areas = explode(",",SEARCH_LIST);
$positions = explode(",",POSITIONS_LIST);

?>


<article>
<section><h1><?php echo SEARCH_INTRO; ?></h1>
<ul>
   <?php
		for($i=0;$i<count($areas);$i++)
  		{
			echo "<li>".$areas[$i]."</li>";
		}
	?>
</ul>
</section>
<section><h1><?php echo POSITIONS_INTRO; ?></h1>
<ul>
   <?php
		for($i=0;$i<count($positions);$i++)
  		{
			echo "<li>".$positions[$i]."</li>";
		}
	?>
</ul>
</section>
<section><h4><?php echo SEARCH_SUMMARY_1; ?></h4>
<br /><?php echo SEARCH_SUMMARY_2; ?>
</section>
</article>
<?php echo FOOTER; ?>