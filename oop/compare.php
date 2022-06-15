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
?>
