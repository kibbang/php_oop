<h1>Function</h1>
<?php
// 함수를 가지고 프로그래밍 (파일을 다룸)
var_dump(is_file('data.txt')); // 파일인가
var_dump(is_dir('data.txt'));  // 디렉토리인가
var_dump(file_get_contents('data.txt')); // 내용을 가져옴
file_put_contents('data.txt', rand(1, 1000)); // 내용을 넣음
?>

<h1>Object</h1>
<?php
// 함수까지만 익혀서도 PHP는 가능
// 객체의 도움을 받으면 더욱 쉽게 할 수 있다.
// PHP는 두가지를 다 가지고 있어서 좀 잡탕같은 느낌임
// 객체지향은 JAVA가 깔끔함
// SPL(Standard PHP Library)

// 객체를 이용해서 파일을 다룸
$file = new SplFileObject('data.txt'); // $file에 객체를 생성해 담음
var_dump($file->isFile());
var_dump($file->isDir());
var_dump($file->fread($file->getSize()));
$file->fwrite(rand(1, 1000));

/**
 * 특징
 * 인자를 계속 전달 할 필요가 없다. 객체 내의 함수들은 공유를 한다.
 * 잘 정돈되어있다
 */

// 하나를 더 만들어도 됨
$file2 = new SplFileObject('data2.txt'); // $file2에 객체를 생성해 담음
var_dump($file2->isFile());
var_dump($file2->isDir());
var_dump($file2->fread($file2->getSize()));
$file2->fwrite(rand(1, 1000));

// SplFileObject : Class (설계도)
// Class앞에 new를 붙이면 저 클래스를 기반으로 객체를 만들어서 리턴
// $file, $file2 : Instance (설계도를 바탕으로 만들어진 구체적인 제품)
// isFile, isDir, fread: Method(function)
// data.txt, data2.txt: state(상태)
// 인스턴스들은 서로 다른 상태를 가지고 있기 때문에 같은 클래스라도 동작이 다르게 된다
?>
