<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP에서의 배열 반복문 구현</title>
  </head>
  <body>
    <h1>JavaScript에서의 배열 반복문 구현</h1>
    <ul>
      <script type="text/javascript">
        list=new Array('최성욱','이시형','오근식','고길원','권택림');
        i=0;
        while(i<list.length){
          document.write("<li>"+list[i]+"</li>");
          i=i+1;
        }
      </script>
    </ul>

    <h1>PHP에서의 배열 반복문 구현</h1>

    <ul>
    <?php
    $list=array("최성욱","이시형","오근식","고길원","권택림");
    $i=0;
    while($i<count($list)){
      echo "<li>".$list[$i]."</li>";
      $i=$i+1;

    }

     ?>
   </ul>
  </body>
</html>
