<?php
 $user_id = $_POST["user_id"];
 $pw = $_POST["pw"];
    // �����ͺ��̽� ���� ���ڿ�. (db��ġ, ���� �̸�, ��й�ȣ)
    $connect=mysql_connect( "localhost", "teamclick", "click1234") or  
        die( "SQL server�� ������ �� �����ϴ�.");
 

    mysql_query("SET NAMES UTF8");
   // �����ͺ��̽� ���� dd
   mysql_select_db("teamclick",$connect);
 
   // ������ ����
   $sql = "select * from User where ID='$user_id'";
 
   // ���� ���� ����� $result�� ����
   $result = mysql_query($sql) or die("����");
   // ��ȯ�� ��ü ���ڵ� �� ����
   

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