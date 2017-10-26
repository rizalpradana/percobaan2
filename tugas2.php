<?php
class Matematika{

 	public $bilA,$bilB;

 	function set_penjumlahan($bilanganA,$bilanganB){

 		$this->bilA = $bilanganA;
 		$this->bilB = $bilanganB;
 	}

 	function get_penjumlahan(){
 		return $this->bilA + $this->bilB;
 	}
 	
 	public $bil3,$bil4;

 	function set_pengurangan($bilangan3,$bilangan4)
 	{

 		$this->bil3 = $bilangan3;
 		$this->bil4 = $bilangan4;
 	}

 	function get_pengurangan(){
 		return $this->bil3 - $this->bil4;
 	}
 	public $bil5,$bil6;

 	function set_perkalian($bilangan5,$bilangan6){

 		$this->bil5 = $bilangan5;
 		$this->bil6 = $bilangan6;
 	}

 	function get_perkalian()
 	{
 		return $this->bil5 * $this->bil6;
 	}
 	public $bilC,$bilD;

 	function set_pembagian($bilanganC,$bilanganD)
 	{

 		$this->bilC = $bilanganC;
 		$this->bilD = $bilanganD;
 	}

 	function get_pembagian()
 	{
 		return $this->bilC / $this->bilD;
 	}
 }

 $penjumlahan1 = new Matematika;
 $penjumlahan1->set_penjumlahan(21,3);
 echo"<h3> penjumlahan </h3>";
 echo"hasil penjumlahan : " .$penjumlahan1->get_penjumlahan().'<br>';
 $pengurangan1 = new Matematika;
 $pengurangan1->set_pengurangan(21,3);
 echo"<h3> pengurangan </h3>";
 echo"hasil pengurangan : " .$pengurangan1->get_pengurangan().'<br>';
 $perkalian1 = new Matematika;
 $perkalian1->set_perkalian(21,3);
 echo"<h3> Perkalian </h3>";
 echo"hasil Perkalian : " .$perkalian1->get_perkalian().'<br>';
 $pembagian1 = new Matematika;
 $pembagian1->set_pembagian(21,3);
 echo"<h3> Pembagian </h3>";
 echo"hasil Pembagian : " .$pembagian1->get_pembagian().'<br>';

?>