<?php
echo"<h3> Data manusia </h3>";
//class
class manusia{

	//property
	public $berat;
	public $tinggi;


public function set_berat($berat)
	{
		$this-> berat = $berat;
	}
public function get_berat()
	{
		return $this-> berat;
	}
public function set_tinggi($tinggi)
	{
		$this-> tinggi = $tinggi;
	}
public function get_tinggi()
	{
		return $this-> tinggi;
	}
    } 
$manusia1 = new manusia;
$manusia1-> set_berat(35);
echo "Berat manusia itu adalah : ".$manusia1-> get_berat(). '<br>';
$manusia1->set_tinggi(155);
echo "Tinggi manusia itu adalah : ".$manusia1-> get_tinggi(). 'cm','<br>';
?>


<?php
echo"<h3> Data Princess </h3>";
//class
class Princess{

	//property
	public $sikap = 'ramah';
	public $wajah = 'cantik';

}

 $Princess1 = new Princess;
 echo "Princess itu memiliki sikap yang sangat " .$Princess1-> sikap. '<br>'; 
 echo "tidak hanya sikap nya saja yang ramah wajah nya pun sangat " .$Princess1-> wajah. '<br>';

 echo"<h3> Data kelinci </h3>";
 //class
 class kelinci{

 	//property
 	public $pipi = 'tembem';
 	public $sifat = 'gemes';
 }

 $kelinci1 = new kelinci;
 echo "kelinci itu memiliki pipi yang sangat" .$kelinci1-> pipi.'<br>';
 echo "kelinci itu memiliki sifat yang sangat" .$kelinci1-> sifat.'<br>'; 


 echo"<h3> Data Putri duyung </h3>";
 //class
 class Putri_duyung{

 	//property
 	public $badan = 'lucu';
 	public $wajah = 'lumayan cantik';

 }
 $Putri_duyung1 = new Putri_duyung;
 echo "Putri duyung itu memiliki badan yang " .$Putri_duyung1-> badan.'<br>';
 echo "Putri duyung itu memiliki wajah yang " .$Putri_duyung1-> wajah.'<br>';


echo"<h3> Data harimau </h3>";
//class
 class harimau{

 	//property
 	public $wajah ='seram';
 	public $sikap ='galak';
 }
 	$harimau1 = new harimau;
 echo "harimau itu memiliki wajah yang " .$harimau1-> wajah.'<br>';
 echo "harimau itu memiliki wajah yang " .$harimau1-> sikap. '<br>';
 	


?> 