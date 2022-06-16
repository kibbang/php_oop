<?php
class myFileObject {
    function __construct($fname) // 생성자: 인스턴스를 생성할때 생성자를 먼저 호출
    {
        $this->filename = $fname;
    }

    function isFile(): bool
    {
        return is_file($this->filename);
    }
}
$file = new myFileObject('data.txt');

var_dump($file->isFile());
var_dump($file->filename);

// 클래스를 만드는 방법
// 클래스 키워드 선언 후 클래스 이름 적는다 그리고 중괄호로 시작과 끝을 맺음
// 그것이 내용이됨
// new 클래스명은 하나의 객체를 생성하여 변수에 담고 그 변수가 인스턴스가 됨
// 인스턴스->메소드 : 해당 인스턴스를 만든 클래스의 메소드를 호출
// $this: 인스턴스에 할당한(주입한) filename은 인스턴스의 변수
// 즉 인스턴스에서 정의된 변수 filename에 접근하기 위해서는 $this로 먼저 인스턴스에 접근해야 함
// 클래스를 기반으로 각각의 인스턴스를 만들고 이제야 다른 상태를 갖게 되었다
/**
myFileObject : Class
$file, $file2 : Instance
isFile : method, behavior
$this->filename : Instance variable, Instance field, Instance property
 */

//============================================//
// 생성자 : 인자값으로 $fname이 data.txt가 됨 그러면 생성자가 실행될때 $fname은 대입 연산자(=)로 인해
// $this->>filename이 되고 그러면 이제 $this->filename 셋팅이 된것이다.
// 생성자의 역할: 인스턴스가 만들어질 때 꼭 필요한 값을 인자로 넘겨 받을 수 있다. 인스턴스가 생성될때 해야 할 것 들을
// 생성자에 적어두면 그대로 초기화가 된다.