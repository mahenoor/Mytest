<?php
class Car{
	public $comp;
	public $color = 'blue';
	public $hasSunRoof = 'true';
	public function hello() {
		return 'hello';
	}
}
$bmw = new Car();
$audi = new Car();
echo $bmw -> color;
echo "<br/ >";
echo $audi -> color;
$bmw -> color = 'red';
echo $bmw -> color;
echo $bmw -> hasSunRoof = 'false';
echo $audi -> hasSunRoof = 'true';
echo $bmw -> hello(); 
?>