<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
</head>
<body>
  <h1>JavaScript으로 반복문 구현</h1>
  <ul>
  <script>
    i = 0;
    while(i < 10){
      document.write("<li>hello world JavaScript!!</li>");
      i = i + 1;
    }
  </script>
  </ul>

  <h2>PHP으로 반복문 구현</h2>
  <ul>
  <?php
    $i = 0;
    while($i < 10){
      echo "<li>hello world PHP!!</li>";
      $i = $i + 1;
    }
  ?>
  </ul>
</body>
</html>
