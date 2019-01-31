<?php
 $user_id = $_POST["user_id"];
 $pw = $_POST["pw"];
    // 데이터베이스 접속 문자열. (db위치, 유저 이름, 비밀번호)
    $connect=mysql_connect( "localhost", "teamclick", "click1234") or  
        die( "SQL server에 연결할 수 없습니다.");
 

    mysql_query("SET NAMES UTF8");
   // 데이터베이스 선택 dd
   mysql_select_db("teamclick",$connect);
 
   // 쿼리문 생성
   $sql = "select * from User where ID='$user_id'";
 
   // 쿼리 실행 결과를 $result에 저장
   $result = mysql_query($sql) or die("실패");
   // 반환된 전체 레코드 수 저장
   

 $data =  mysql_fetch_array($result);
 
 if($user_id == ''){
  echo 'Please input id';
  exit;
}
 if($data["ID"] != $user_id){
  echo 'id not exist';
  exit;
}
 if($data["PW"] != $pw){
  echo 'password missmatch';
  exit;
 }
 echo 'success';
?>