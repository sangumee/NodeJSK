<?php
    /* 데이터베이스 등의 정보 읽어오기 */
    require_once("data/db_info.php");

    /* 데이터베이스 접속과 데이터베이스 선택 */
    $s = @mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    /* 타이틀 등 표시 */
print <<<eot1
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>SQL 블로그 검색 화면</title>
</head>
<body bgcolor='orange'>
    <hr>
    <font size="5">(검색 결과는 여기에)</font>
    <br>
eot1;

    /* 검색 문자열을 가져와서 태그 삭제 */
    $se_d = isset($_GET["se"])? htmlspecialchars($_GET["se"]): null;

    /* 검색 문자열($se_d)에 데이터가 있으면 검색 처리 */
    if ($se_d<>"") {

/* 검색 SQL 문. 테이블 tbj1에 tbj0을 결합(조인) */
$str=<<<eot2
    SELECT tbj1.number, tbj1.name, tbj1.mess, tbj0.thread FROM tbj1 JOIN tbj0 ON tbj1.gnum=tbj0.gnum WHERE tbj1.mess LIKE "%$se_d%"
eot2;

        /* 검색 질의 실행 */
        $re = mysql_query($str);
        while ($result = mysql_fetch_array($re)) {
            print " $result[0] : $result[1] : $result[2] ( $result[3] )";
            print "<br><br>";
        }
    }

    /* 데이터베이스 접속 종료 */
    mysql_close($s);

/* 검색 문자열 입력란, 메인 화면에 링크 */
print <<<eot3
    <hr>
    메시지에 포함되는 문자를 입력하세요!
    <br>
    <form method="get" action="board_search.php">
        검색할 문자열
        <input type="text" name="se">
        <br>
        <input type="submit" value="검색">
    </form>
    <br>
    <a href="board_top.php">스레드 목록으로 돌아가기</a>
</body>
</html>
eot3;
 ?>
