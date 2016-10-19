<?php
class Car{
	public $comp;
	public $price;
	public $color = 'blue';
	public function hello() {
		return "i am a <i>" . $this-> comp . "</i>, and i am a <i>". $this -> color;
	}
}
$bmw = new Car();
$audi = new Car();
$bmw -> comp = 'BMW';
$bmw -> color = 'green';
$audi-> comp = 'BMW';
$audi -> color = 'green';
echo $bmw -> hello();
?>