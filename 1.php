<?php
class robot{
	public $suara= 'ngik ngik ngik ';
	public $tinggi= '10 ';
	public $gerakan_kepala= 'kanankiriatasbawah ';
	public $maju= 'mundurdepan ';
	public $berkaki= 4;
	public $berat= '30';

	public function suaranya()
	{
		echo $this->suara;
	}
	public function gerakankepalanya()
	{
		echo $this->gerakan_kepala;
	}
	public function majunya()
	{
		echo $this->maju;
	}
}
$robot= new robot;
echo "<br>".$robot->suaranya();
echo "<br>".$robot->gerakankepalanya();
echo "<br>".$robot->majunya();

//echo "bunyi robot :" .$robot->suara;echo "tinggi :" .$robot->tinggi;
//echo "gerakan kepala :," .$robot->gerakan_kepala;
//echo "maju :" .$robot->maju;
//echo "berkaki :" .$robot->berkaki;
//echo "berat :" .$robot->berat;
?>