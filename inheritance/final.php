<?php
class ParentClass
{
    public function a()
    {
        echo "<h1>Parent</h1>";
    }

    public final function b() // 자식에서 상속 불가
    {
        echo "<h1>Parent B</h1>";
    }
}

class ChildClass extends ParentClass
{
    public function a()
    {
        echo "<h1>Child</h1>";
    }
}

$obj = new ChildClass();
$obj->a();