<?php
// class BankAccount
// {
//     public $accountNumber;
//     public $balance;

//     public function deposit($amount)
//     {
//         if ($amount>=0){
//             $this->balance+=$amount;
//         }
//     }

// }
// $account= new BankAccount();
//  $account->accountNumber=124;
//  $account->balance=10700;
//  $account->deposit(100);

//  echo $account->accountNumber;
//  echo "<br>";
//  echo $account->balance;



// class a{
//     function fun1(){
//         echo "Hello zamzam";
//     }
// }

// class b extends a {
//     function fun2(){
//         echo "Zamzam Niaz";
//     }
// }
// $obj = new b();
// $obj->fun1();




// class demo{
//     public function display(){
//         echo "Example of inheritance in PHP, ";

//     }
// }

// class demo1 extends demo{
//     public function view(){
//         echo "CIT class lecture";
//     }
// }

// $obj = new demo1();
// $obj->display();
// $obj->view();


// class Triangle{
//     private $a;
//     private $b;
//     private $c;

//     public function _construct($aVal, $bVal, $cVal){
//         $this->a = $aVal;
//         $this->b = $bVal;
//         $this->c = $cVal;
//     }
//     public function calcArea(){
//         $a = $this->a;
//         $b = $this->b;
//         $c = $this->c;
//        $p = ($a + $b + $c)/2;
//        $area = sqrt($p * ($p-$a) * ($p - $b)* ($p-$c));
//        return $area;
//     }
// }

// $triangle = new Triangle(3,4,5);
// echo "Area = ". $triangle->calcArea();


// class Person{
//     private $name;
//     private $age;

//     public function setName($name){
//         $this->name = $name;
//     }

//     public function setAge($age){
//         $this->age = $age;
//     }

//     public function getInfo(){
//         return "Name: ". $this->name. ", Age: " . $this->age;
//     }
// }

// $person = new Person();
// $person->setName("Zamzam");
// $person->setAge(20);
// echo $person->getInfo();





// $name = "Zamzam Niaz and my age is ";
// $age = "20";

// echo $name.$age;




// class Person{
//     function yourRole(){
//         echo "I am a girl";
//     }
// }

// class Student extends Person{
//     function yourRole(){
//         echo "I am a student, ";
//     }
// }

// $s = new Student();
// $s->yourRole();

// $p = new Person();
// $p->yourRole();




// print 3's table   

class MultiplicationTable {

    public function printTable($num) {
        for ($i = 1; $i <= 10; $i++) {
            $result = $num * $i;
            echo "$num x $i = $result <br>";
        }
    }
}

// Creating an instance of MultiplicationTable class
$table = new MultiplicationTable();
// Printing the table for 3's multiplication
$table->printTable(3);



// making calculator in php oops



// class Calculator {
//     public function add($num1, $num2) {
//         return $num1 + $num2;
//     }

//     public function subtract($num1, $num2) {
//         return $num1 - $num2;
//     }

//     public function multiply($num1, $num2) {
//         return $num1 * $num2;
//     }

//     public function divide($num1, $num2) {
//         if ($num2 == 0) {
//             return "Can't divide zero";
//         } else {
//             return $num1 / $num2;
//         }
//     }
// }

// $calculator = new Calculator();

// // Perform operations
// echo "Addition: of 5 and 3 = " . $calculator->add(5, 3) . "<br>";
// echo "Subtraction: of 10 and 4 = " . $calculator->subtract(10, 4) . "<br>";
// echo "Multiplication: of 6 and 2 = " . $calculator->multiply(6, 2) . "<br>";
// echo "Division: of 8 and 2 = " . $calculator->divide(8, 2) . "<br>";







// class Calculator{

//     public function add($num1, $num2){
//         return $num1 + $num2;
//     }

//     public function subtract($num1, $num2){
//         return $num1 - $num2;
//     }

//     public function multiply($num1, $num2){
//         return $num1 * $num2;
//     }

//     public function divide($num1, $num2){
//         if($num2 == 0){
//             echo "Can't divide zero";
//         }else{
//             $num1/$num2;
//         }
//     }

// }

// $calculator = new Calculator();
//     echo "Addition: of 5 and 3 = " . $calculator->add(5, 3) . "<br>";
//     echo "Subtraction: of 10 and 4 = " . $calculator->subtract(10, 4) . "<br>";
//     echo "Multiplication: of 6 and 2 = " . $calculator->multiply(6, 2) . "<br>";
//     echo "Division: of 8 and 2 = " . $calculator->divide(8, 2) . "<br>";








// Convert celcius to fornehiet

// class Temprature{
//  public function celcToFahran($celsius){
//     return ($celsius * 9/5) + 32;
//  }
// }

// $tempConverter = new Temprature();
// $celsius = 10;
// $fahrenhiet = $tempConverter->celcToFahran($celsius);
// echo "$celsius degrees Celsius is equal to $fahrenhiet degrees Fahrenheit.";











// to-do list in php oops:


// class ToDoList {
//     private $tasks = [];

//     public function addTask($task) {
//         $this->tasks[] = $task;
//     }

//     public function removeTask($index) {
//         if (isset($this->tasks[$index])) {
//             unset($this->tasks[$index]);
//         }
//     }

//     public function displayTasks() {
//         if (empty($this->tasks)) {
//             echo "No tasks in the list.";
//         } else {
//             echo "Tasks in the to-do list:<br>";
//             foreach ($this->tasks as $index => $task) {
//                 echo ($index + 1) . ". $task<br>";
//             }
//         }
//     }
// }

// // Creating a to-do list instance
// $toDoList = new ToDoList();

// // Adding tasks
// $toDoList->addTask("Buy groceries");
// $toDoList->addTask("Do laundry");
// $toDoList->addTask("Finish project");

// // Displaying tasks
// $toDoList->displayTasks();

// // Removing a task
// $toDoList->removeTask(1);

// // Displaying tasks after removal
// echo "<br>After removing task:<br>";
// $toDoList->displayTasks();







// create an oop code for student information system using setter and gatter method(name, age and grade)













// overloading in php

// class SampleClass{
//     function add(int $a, int $b); int
//     {
//         return $a + $b;
//     }
//     function add(int $a, int $b, int $c): int
//     {
//         return $a + $b + $c >10 ?? 10;
//     }
// }


// class SampleClass{
//     function __call($function_name, $arguments){
//         $count = count ($arguments);

//         // check function name 
//         if($function_name == 'add'){
//             if($count == 2){
//                 return array_sum($arguments);
//             }else if ($count == 3){
//                 return array_sum($arguments);
//             }
//         }
//     }
// }

// $sampleObject = new SampleClass;
// echo $sampleObject->add(12, 12)."<br>";
// echo $sampleObject->add(12, 2, 12)."<br>";






// class Shape {
//     // Triangle
//     public function triangleArea($base, $height) {
//         return 0.5 * $base * $height;
//     }

//     // Circle
//     public function circleArea($radius) {
//         return pi() * $radius * $radius;
//     }

//     // Rectangle
//     public function rectangleArea($length, $width) {
//         return $length * $width;
//     }
// }

// $shape = new Shape();

// echo "Area of triangle: " . $shape->triangleArea(5, 4) . "<br>";
// echo "Area of circle: " . $shape->circleArea(3) . "<br>";
// echo "Area of rectangle: " . $shape->rectangleArea(6, 7) . "<br>";












class Shape{
    public function triangleArea($base , $height){
        return 0.5 *$base * $height;
    }
    public function circleArea($radius){
        return pi() * $radius * $radius;
    }
    public function rectangleArea($length , $width){
        return $length * $width;
    }
}

$shape = new Shape();
echo "Area of Triangle is : ".$shape->triangleArea(3,4)."<br>";
echo "Area of Circle is : ".$shape->circleArea(3)."<br>";
echo "Area of Rectangle is : ".$shape->rectangleArea(3,4)."<br>";

?>










 