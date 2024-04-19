<?php
//****************************************
//CONSULTING TOP MENU
//-------------------------

Define("NUM_OF_ITEM_IN_MENU",2);

//consultingEN.inc.php
//-------------

require_once("heading.inc.php");
?>

<article>
<section><?php echo CONSULT; ?></section>
<section><h3><?php echo CONSULT_SERVICES_1; ?></h3><?php echo CONSULT_SERVICES_SUMMARY_1; ?></section>
<section><h3><?php echo CONSULT_SERVICES_2; ?></h3><?php echo CONSULT_SERVICES_SUMMARY_2; ?></section>
<section><h3><?php echo CONSULT_SERVICES_3; ?></h3><?php echo CONSULT_SERVICES_SUMMARY_3; ?></section>
</article>
<?php
	echo FOOTER;
?>