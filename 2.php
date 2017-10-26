<?php
class robot{
public $suara;
public $bunyi;


public function set_suara($suara);
{
	return $this->suara = $suara;
}

public function set_suara($bunyi);
{
	return $this->suara = $bunyi;
}
}
$robot = new robot;
$robot1 = new robot;
$robot->suara('ngik ngik');
$robot1->suara('ngok ngok');
echo $robot->get_suara();
echo $robot1->get_suara();
?>