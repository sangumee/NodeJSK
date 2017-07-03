<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <?php
    $password = $_GET["password"];
    if($password == "1111"){
        echo "로그인이 완료되었습니다. 비밀번호는 1111입니다";
    } else {
        echo "뉘신지?";
    }
   ?>
</body>
</html>
