<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // ������� ��� ������ � $
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
if ($mysqli->connect_errno) { die('������ ����������: ' . $mysqli->connect_error); }else{ech$
if(mb_strlen($login) < 0 || mb_strlen($login) > 90){
    
    echo "������������ ����� ������";
    exit();
}
else if(mb_strlen($name) < 1){
    echo "������������ ����� �����.";
    exit();
} // ��������� ����� �����
$pass = password_hash($pass, PASSWORD_BCRYPT);

//$pass = md5($pass."thisisforhabr"); // ������� ��� �� ������

$mysql = new mysqli('localhost', '7471_tvp', '7471_tvp', '7471_tvp');

$result1 = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");

$user1 = $result1->fetch_assoc(); // ������������ � ������

if(!empty($user1)){
    echo "������ ����� ��� ������������!";
    exit();
}


$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)VALUES('$login', '$pass', '$name$
$mysql->close();
    
header('Location: /');
exit();
 ?>