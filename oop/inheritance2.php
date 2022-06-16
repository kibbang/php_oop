<?php
//$file = new SplFileObject('example.txt');
//var_dump($file->fread($file->getSize()));
//echo '<br>';
//$file->rewind();
//var_dump($file->fread($file->getSize()));

class MyFileObject extends SplFileObject
{
    public function getContents()
    {
        $content = $this->fread($this->getSize());
        $this->rewind();
        return $content;
    }
}
$file = new MyFileObject('example.txt');
//var_dump($file->fread($file->getSize()));
//echo '<br>';
//$file->rewind();
//var_dump($file->fread($file->getSize()));

var_dump($file->getContents());
echo '<br>';
var_dump($file->getContents());