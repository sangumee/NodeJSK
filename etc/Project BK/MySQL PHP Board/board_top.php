<?php
    /* 데이터베이스 정보 등을 읽어온다. */
    require_once("data/db_info.php");

    /* 데이터베이스 접속과 데이터베이스 선택 */
    $s = @mysql_connect($SERV, $USER, $PASS) or die("실패입니다.");
    mysql_select_db($DBNM);

    /* 타이틀과 화면 표시 */
print <<<eot1
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>SQL 블로그 화면</title>
</head>
<body bgcolor='lightsteelblue'>
    <img src='pic/parent.gif'>
    <font size='7' color='indigo'>SQL 블로그 게시판입니다~</font>
    <br><br>
    확인하고자 하는 스레드 번호를 누르세요.
    <hr>
    <font size='5'>(스레드 목록)</font>
    <br>
eot1;

    /* 클라이언트의 IP 주소 가져오기 */
    $ip = getenv("REMOTE_ADDR");

    /* 스레드 제목(th)에 데이터가 있으면 테이블 tbj0에 대입 */
    $th_d = isset($_GET["th"])? htmlspecialchars($_GET["th"]):null;
    if ($th_d<>"") {
        mysql_query("INSERT INTO tbj0 (thread, date, ipaddr) VALUES('$th_d', now(), '$ip')");
    }

    /* tbj0의 모든 데이터 추출 */
    $re = mysql_query("SELECT * FROM tbj0");
    while ($result = mysql_fetch_array($re)) {
print <<<eot2
    <a href="board.php?gn=$result[0]">$result[0] $result[1]</a>
    <br>
    $result[2]작성
    <br><br>
eot2;
    }

    /* 데이터베이스 접속 종료 */
    mysql_close($s);

/* 스레드 제목 입력과 메인 화면으로 이동하는 링크 등 */
print <<<eot3
    <hr>
    <font size="5">스레드 작성</font>
    <br>
    여기에 새로운 스레드를 작성합니다!
    <br>
    <form method="get" action="board_top.php">
        새로 작성할 스레드의 제목
        <input type="text" name="th" size="50">
        <br>
        <input type="submit" value="확인">
    </form>
    <hr>
    <font size="5">메시지 검색</font>
    <a href="board_search.php">검색을 하려면 여기를 누르세요</a>
    <hr>
eot3;
 ?>
