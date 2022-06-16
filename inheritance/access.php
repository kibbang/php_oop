<?php
class ParentClass
{
    public string $_public = '<h1>public</h1>';
    protected string $_protected = '<h1>protected</h1>';
    private string $_private = '<h1>private</h1>';

    /**
     * @return string
     */
    public function getPrivate(): string
    {
        return $this->_private;
    }

    /**
     * @param string $private
     */
    public function setPrivate(string $private): void
    {
        $this->_private = $private;
    }
}
class ChildClass extends ParentClass
{
    public function callPublic()
    {
        echo $this->_public;
    }

    public function callProtected()
    {
        echo $this->_protected;
    }

    public function callPrivate()
    {
//        echo $this->_private; // 이건 부모꺼라 자식도 가져올 수 없다
        echo $this->getPrivate(); // get, set으로 세팅하명 가능
    }
}
$obj = new ChildClass();
//echo $obj->_public;
//echo $obj->_private;
//echo $obj->_protected;

$obj->callPublic();
$obj->callProtected();
$obj->callPrivate();