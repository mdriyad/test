<?php
class MyClass {
	var $welcome;
	
	public function hello() {
		$this->welcome = "Hello World!";
	}
}

class AnotherClass extends MyClass {
	
	public function hello2() {
		$this->hello();
	}
}

$obj = new AnotherClass();
$obj->hello2();
echo $obj->welcome;
?>