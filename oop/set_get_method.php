<?php
class Person {
    /** @property string $name */
    private string $name;
    public function sayHi() {
        print("Hi I am ".$this->name.'.');
    }
    public function setName($_name) {
        $this->isEmptyDie($_name);
        $this->name = $_name;
    }
    public function getName() {
        return $this->name;
    }

    private function isEmptyDie($value)
    {
        if(empty($value)) {
            die('I need name');
        }
    }
}
$egoing = new Person();
$egoing->setName('egoing');
$egoing->sayHi();
print($egoing->getName());
