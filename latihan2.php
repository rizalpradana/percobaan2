<?php

	require_once 'robot.php';

	$robot1 = new robot('ngik ngik nguk');
	$robot2 = new robot('meong meong' );
	$robot1->set_suara('ngik ngik nguk');
	$robot1->set_berat(30);
	echo"<h3> Robot 1 </h3>";
	echo   "robot 1 mempunyai suara : ".$robot1-> get_suara(). ' dan beratnya '.$robot1-> 	  get_berat().' kg ','<br>';

	$robot2->set_suara('meong meong');
	$robot2->set_berat(100);
	echo"<h3> Robot 2 </h3>";
	echo "robot 2 mempunyai suara : ".$robot2-> get_suara(). ' dan beratnya '        .$robot2->   get_berat().' kg ','<br>';

?>