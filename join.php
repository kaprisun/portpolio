<?php
 $user_id = $_POST["user_id"];
 $pw = $_POST["pw"];
$age=$_POST["age"];
    // 데이터베이스 접속 문자열. (db위치, 유저 이름, 비밀번호)--
    $connect=mysql_connect( "localhost", "teamclick", "click1234") or  
        die( "SQL server에 연결할 수 없습니다.");

    mysql_query("SET NAMES UTF8");
   // 데이터베이스 선택
   mysql_select_db("teamclick",$connect);
 
   // 세션 시작
   session_start();
 
   // 쿼리문 생성
   $sql = "select * from User where ID='$user_id'";
   // 쿼리 실행 결과를 $result에 저장
   $result = mysql_query($sql) or die("실패1");
   // 반환된 전체 레코드 수 저장
   
 $data =  mysql_fetch_array($result);
 
 if($data["ID"] == $user_id){
	echo 'already id exist';
    exit;
 }

$sql = "INSERT INTO User(ID,PW,AGE) VALUES ('$user_id','$pw','$age')";
$result = mysql_query($sql) or die("실패2");
	echo 'success';
 
?>