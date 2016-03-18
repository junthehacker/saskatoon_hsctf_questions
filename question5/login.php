<?php
  $username = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysql_connect("localhost","root","1a2B3c4E?///");
  mysql_query("USE saskatoonhsctf",$conn);
  $res = mysql_query("SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "'",$conn);
  if(mysql_num_rows($res)){
    echo "your flag is hsctf{question5}";
  } else {
    echo "error";
  }
?>
