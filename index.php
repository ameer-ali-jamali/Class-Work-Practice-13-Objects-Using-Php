Objects
Object is an instance of class. An Object is a self-contained component which consists of methods and properties to make a particular type of data useful. We can create multiple objects from a class and each object will have all the properties and methods defined in the class, but they will have different property values. To declare an object in PHP we use the new keyword.

Example:

$object_name = new ClassName();


Creating an Object in PHP
We will create two objects in the following example.

<?php
class Employee
{
    // Properties
    public $name;
    public $surname;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$emp1 = new Employee();
$emp2 = new Employee();
$emp1->set_name('muneeb');
$emp2->set_name('akram');

echo $emp1->get_name();
echo "<br>";
echo $emp2->get_name();
?>