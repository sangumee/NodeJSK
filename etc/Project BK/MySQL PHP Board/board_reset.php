<?php
    require_once("data/db_info.php");
    $s = @mysql_connect($SERV,$USER,$PASS) or die("실패입니다.");

    mysql_select_db($DBNM);

    mysql_query("DELETE FROM tbj0");
    mysql_query("DELETE FROM tbj1");
    mysql_query("ALTER TABLE tbj0 AUTO_INCREMENT=0");
    mysql_query("ALTER TABLE tbj1 AUTO_INCREMENT=0");

    print "SQL 블로그의 테이블을 초기화했습니다.";

    mysql_close($s);
 ?>
