<?php
echo"<h3>Hasil Penjumlahan</h3>";
 class penjumlahan{
 	public $bilA,$bilB;

 	function set_nilai($bilanganA,$bilanganB){

 		$this->bilA = $bilanganA;
 		$this->bilB = $bilanganB;
 	}

 	function get_nilai(){
 		return $this->bilA + $this->bilB;
 	}
 }

 $penjumlahan1 = new penjumlahan;
 $penjumlahan1->set_nilai(21,3);
 echo"hasil : " .$penjumlahan1->get_nilai();

?>

<?php
echo"<h3>Hasil pengurangan</h3>";
class pengurangan{
 	public $bil3,$bil4;

 	function set_nilai($bilangan3,$bilangan4){

 		$this->bil3 = $bilangan3;
 		$this->bil4 = $bilangan4;
 	}

 	function get_nilai(){
 		return $this->bil3 - $this->bil4;
 	}
 }

 $pengurangan1 = new pengurangan;
 $pengurangan1->set_nilai(21,3);
 echo"hasil : " .$pengurangan1->get_nilai();
?>

<?php
echo"<h3>Hasil perkalian</h3>";
class perkalian{
 	public $bil5,$bil6;

 	function set_nilai($bilangan5,$bilangan6){

 		$this->bil5 = $bilangan5;
 		$this->bil6 = $bilangan6;
 	}

 	function get_nilai(){
 		return $this->bil5 * $this->bil6;
 	}
 }

 $perkalian1 = new perkalian;
 $perkalian1->set_nilai(21,3);
 echo"hasil : " .$perkalian1->get_nilai();
?>

<?php
echo"<h3>Hasil pembagian</h3>";
class pembagian{
 	public $bilC,$bilD;

 	function set_nilai($bilanganC,$bilanganD){

 		$this->bilC = $bilanganC;
 		$this->bilD = $bilanganD;
 	}

 	function get_nilai(){
 		return $this->bilC / $this->bilD;
 	}
 }

 $pembagian1 = new pembagian;
 $pembagian1->set_nilai(21,3);
 echo"hasil : " .$pembagian1->get_nilai();
?>