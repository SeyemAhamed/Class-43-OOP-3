<?php

class Calculation{

    public function __construct($x, $y){
        echo $x+$y.'<br>';
    }

    public function show(){
        echo 'This is normal function <br>';
    }

    public function __destruct()
    {
        echo 'Destructor <br>';
    }

    public function test(){
        echo 'This is test function <br>';
    }
}

abstract class Person {
    
    abstract protected function personalInfo($x, $y);

    public function test(){
        echo 'Hello';
    }
}

class child extends Person{
    public function personalInfo($name, $age){
        echo 'name='.$name.'<br>age='.$age;
    }
}

// $calc = new Calculation(20, 30);
// $calc->show();
// $calc->test();

$human = new child();
$human->test();
$human->personalInfo('Rahim', 30);

// echo $calc->sum(40, 20). '<br>'; //30
// echo $calc->sum(50, 70). '<br>';
// echo $calc->sum(50, 80). '<br>';


?>