<?php
class bangundatar{
	public $panjang;
	public $lebar;
	public $sisi;
	public $alas;
	public $tinggi;
	public $sisiA;
	public $sisiB;
	public $sisiC;


	//persegipanjang
	//luas persegi panjang
	function set_luaspersegipanjang($p, $l){
 		$this->panjang = $p;
 		$this->lebar = $l;
 	}
 	function get_luaspersegipanjang(){
 		return $this->panjang * $this->lebar;
 	}
 	//keliling persegi panjang
 	function set_kelilingpersegipanjang($p, $l){
 		$this->panjang = $p;
 		$this->lebar = $l;
 	}
 	function get_kelilingpersegipanjang(){
 		return 2 * ($this->panjang + $this->lebar);
 	}


 	//persegi
 	//luas persegi
 	function set_luaspersegi($s){
 		$this->sisi = $s;
 	}
 	function get_luaspersegi(){
 		return $this->sisi * $this->sisi;
 	}
 	//keliling persegi
	function set_kelilingpersegi($s){
 		$this->sisi = $s;
 	}
 	function get_kelilingpersegi(){
 		return 4 * $this->sisi;
 	}

 	//segitiga
 	//luas segitiga
 	function set_luassegitiga($a, $t){
 		$this->alas = $a;
 		$this->tinggi = $t;
 	}
 	function get_luassegitiga(){
 		return $this->alas * $this->tinggi / 2;
 	}
 	//keliling persegi
 	Function set_kelilingsegitiga($sa, $sb, $sc){
 		$this->sisiA = $sa;
 		$this->sisiB = $sb;
 		$this->sisiC = $sc;
 	}
 	function get_kelilingsegitiga(){
 		return $this->sisiA + $this->sisiB + $this->sisiC ;
 	}
}

$hasilpp = new bangundatar;
$hasilpp->set_luaspersegipanjang(20,5);
$hasilpp->set_luaspersegi(8);
$hasilpp->set_luassegitiga(20,4);
$hasilpp->set_kelilingsegitiga(6,4,7);


echo "<h3>1.Persegi Panjang</h3>";
echo "<h4>Panjang : 20 dan Lebar : 5</h4>";
echo "Luas = ".$hasilpp->get_luaspersegipanjang().'<br>';
echo "Keliling = ".$hasilpp->get_kelilingpersegipanjang().'<br>';
echo "=====================";

echo "<h3>2.Persegi </h3>";
echo "<h4>Sisi : 8 </h4>";
echo "Luas = ".$hasilpp->get_luaspersegi().'<br>';
echo "Keliling = ".$hasilpp->get_kelilingpersegi().'<br>';
echo "=====================";

echo "<h3>3.Segitiga</h3>";
echo "<h4>Alas : 20 dan Tinggi : 4</h4>";
echo "Luas = ".$hasilpp->get_luassegitiga().'<br>';
echo "Keliling = ".$hasilpp->get_kelilingsegitiga().'<br>';
echo "=====================";

?>