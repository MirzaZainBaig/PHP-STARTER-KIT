<?php
class employe{
    private $id;
    private $name;
    private $age;

    public function __construct ($id, $name, $age){
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }
    public function getEmployteeDetails(){
        return $this->id. ' = '. $this->name. ' - '. $this->age. '<br>';
    }
}
class empFactory{
    public static function createEmp($id, $name, $age){
        return new employe ($id, $name, $age);
    }
}

$obj = empFactory::createEmp(1, 'mirza zain', 20);
print_r($obj->getEmployteeDetails());
$obj2 = empFactory::createEmp(2, 'mirza rabeel', 21);
print_r($obj2->getEmployteeDetails());
$obj3 = empFactory::createEmp(3, 'ALI', 27);
print_r($obj3->getEmployteeDetails());
?>
