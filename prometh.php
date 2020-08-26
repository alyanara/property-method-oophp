<?php
class Product{
	public $Barang = "Laptop", 
			$Merk = "ASUS", 
			 $Harga = 6000000;

	public function Cetak(){
		return "$this->Barang, $this->Merk, $this->Harga";
	}
}

// $product1 =  new product();
// $product1->Warna="Hitam";
// var_dump($product1);

// echo "<br>";

$Product2 = new Product();
$Product2->Barang="Mouse";
$Product2->Harga=500000;
echo "Barang1 : " . $Product2->Cetak();

echo "<br>";

$Product3 = new Product();
$Product3->Merk="Lenovo";
echo "Barang2 : " . $Product3->Cetak();



?>