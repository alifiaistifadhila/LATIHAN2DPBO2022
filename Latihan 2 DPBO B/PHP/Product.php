<?php

class Product{

	private $price;
	private $idProduct;

	function __construct(){
	}

	function setPrice($price)
	{
		$this->price = $price;
	}

	function getPrice()
	{
		return $this->price;
	}

	function setIdProduct($idProduct)
	{
		$this->idProduct = $idProduct;
	}

	function getIdProduct()
	{
		return $this->idProduct;
	}

	function __destruct(){
	}

}

?>