<?php
include __DIR__ . '/Weight.php';
class Category extends Product
{
	use Weight;
	public $animal;


	public function __construct(string $name, string $type, string $image, string $price, string $animal)
	{
		parent::__construct($name, $type, $image, $price);
		$this->animal = $animal;


		try {
			$this->setWeight('');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}
