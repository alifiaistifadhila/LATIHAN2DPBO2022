<?php

include "Product.php";
include "Hardware.php";
include "Memory.php";

$kproduk = new Product();
$kproduk->setPrice("Rp 12.450.000");
$kproduk->setIdProduct("PC-001A");

echo "<b><u>DETAIL PC</u></b>"."<br/>";
echo "===========================</b>"."<br/>";
echo "Harga : ".$kproduk->getPrice()."<br/>";
echo "ID Produk : ".$kproduk->getIdProduct()."<br/>";

$khardware = new Hardware();
$khardware->setBrand("ASUS");
$khardware->setModel("ROG GL10CS-ID501T");

echo "Brand : ".$khardware->getBrand()."<br/>";
echo "Model : ".$khardware->getModel()."<br/>";

$kmemori = new Memory();
$kmemori->setFrequency("4400MHz");
$kmemori->setMemorySize("1 TB");
$kmemori->setSupportsCuda("ROG Strix GL10CS");

echo "Frekuensi : ".$kmemori->getFrequency()."<br/>";
echo "Memory Size : ".$kmemori->getMemorySize()."<br/>";
echo "Supports Cuda : ".$kmemori->getSupportsCuda()."<br/>";
echo "----------------------------------------------</b>"."<br/>";

?>