<?php 
//Task 1 - Create a base class Vehicle with properties like make, model, and methods like start(), stop().
class Vehicle {
    public $make;
    public $model;
    
    function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }
    
    function start() {
        echo "Starting $this->make $this->model" . "<br>";
    }
    
    function stop() {
        echo "Stopping $this->make $this->model" . "<br>";
    }
}
// Task 2 - Create a class Car that inherits from Vehicle with additional properties like fuelType, and methods like
class Car extends Vehicle {
    public $fuelType;
    
    function __construct($make, $model, $fuelType) {
        parent::__construct($make, $model);
        $this->fuelType = $fuelType;
    }
    
    function accelerate() {
        echo "Accelerating $this->make $this->model" . "<br>";
    }
}
// Task 3 - Create a class Bicycle that inherits from Vehicle with specific properties like numGears, and methods like
class Bicycle extends Vehicle {
    public $numGears;
    
    function __construct($make, $model, $numGears) {
        parent::__construct($make, $model);
        $this->numGears = $numGears;
    }
    
    function ringBell() {
        echo "Ringing bell" . "<br>";
    }
}
// Task 4 - Create a class ElectricCar that inherits from Car and adds properties like batteryCapacity and methods related to
class ElectricCar extends Car {
    public $batteryCapacity;
    
    function __construct($make, $model, $fuelType, $batteryCapacity) {
        parent::__construct($make, $model, $fuelType);
        $this->batteryCapacity = $batteryCapacity;
    }
    
    function charge() {
        echo "Charging $this->make $this->model" . "<br>";    
    }   
}
// Create instances of each class and test the methods
	$car = new Car("Toyota", "Prius", "gasoline");
	$bike = new Bicycle("Harley-Davidson", "Roadster", 2);
	$electricCar = new ElectricCar("Tesla", "Model S", "electric", 100);
	echo "Examples <br>";
	$car->accelerate();
	$bike->ringBell();
	$electricCar->charge();
?>
