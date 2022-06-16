<?php
class Member
{
    private static int $count = 0;
    private string $name;
    public function __construct($name)
    {
        $this->name = $name;
        self::$count = self::$count + 1;
    }

    public function enter()
    {
        echo "<h1>Enter ".$this->name." ".self::$count."th</h1>";
    }

    public static function getCount()
    {
        return self::$count;
    }
}
$p1 = new Member('egoing');
$p1->enter();
$p2 = new Member('JjangJang');
$p2->enter();
$p2 = new Member('Daero');
$p2->enter();
$p2 = new Member('sam');
$p2->enter();
$p2 = new Member('smith');
$p2->enter();
echo Member::getCount();