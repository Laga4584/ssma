<?php
// 데이터 가져오기 - post 방식 활용
//$g_idx = $_POST["g_idx"];

// 데이터 가져오기 - get 방식 활용
$g_idx = $_GET["g_idx"];

// 데이터 가져오기 - 세션 활용
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
//delete from members where idx='$s_idx';
$sql = "delete from members where idx='$s_idx';";

// 쿼리 전송
mysqli_query($dbcon, $sql);

// DB 종료
mysqli_close($dbcon);

// 세션 삭제
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_id"]);


// 페이지 이동
echo
"<script type=\"text/javascript\">
alert(\"탈퇴 처리되었습니다\");
location.href = \"../index.php\";
</script>";
?>