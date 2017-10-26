<?php
echo"<h3>Hasil Penjumlahan</h3>";
 class penjumlahan{
 	public $bil1,$bil2;

 	function set_nilai($bilangan1,$bilangan2){

 		$this->bil1 = $bilangan1;
 		$this->bil2 = $bilangan2;
 	}

 	function get_nilai(){
 		return $this->bil1 + $this->bil2;
 	}
 }

 $penjumlahan1 = new penjumlahan;
 $penjumlahan1->set_nilai(6,12);
 echo"hasil : " .$penjumlahan1->get_nilai();

?>

<?php
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
 $pengurangan1->set_nilai(25,5);
 echo"hasil : " .$pengurangan1->get_nilai();
?>