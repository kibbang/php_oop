<?php
class myFileObject {
    function isFile(): bool
    {
        return is_file('data.txt');
    }
}
$file = new myFileObject();
var_dump($file->isFile());

// 클래스를 만드는 방법
// 클래스 키워드 선언 후 클래스 이름 적는다 그리고 중괄호로 시작과 끝을 맺음
// 그것이 내용이됨
// new 클래스명은 하나의 객체를 생성하여 변수에 담고 그 변수가 인스턴스가 됨
// 인스턴스->메소드 : 해당 인스턴스를 만든 클래스의 메소드를 호출