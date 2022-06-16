<?php
class ParentClass
{
    public function callMethod($param)
    {
        echo "<h1>Parent {$param}</h1>";
    }
}
class ChildClass extends ParentClass
{
    public function callMethod($param)
    {
        // 부모클래스의 callMethod를 호출하고
        parent::callMethod($param); // 부모 클래스를 지정하는 방법 parent::
        // 자식 클래스를 출력
        echo "<h1>Child {$param}</h1>";
    }
}

$obj = new ChildClass();
$obj->callMethod('method');