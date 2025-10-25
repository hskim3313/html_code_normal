<?php

$host = 'localhost'; // MySQL 호스트
$username = 'time3313'; // MySQL 사용자명
$password = '0000'; // MySQL 비밀번호
$database = 'login_db'; // 사용할 데이터베이스명

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn) 
{
    echo('MySQL 연결 성공<br><br>');
}
else
{
    die('MySQL 연결 실패: ' . mysqli_connect_error());
}

$query = "SELECT * FROM login";
$result = mysqli_query($conn, $query);

if ($result) 
    {
    // 결과 처리
    while ($row = mysqli_fetch_assoc($result)) 
        {
        echo $row['id'] . ' : ' . $row['passwd'] . '<br>';
        }
} else {

    echo '쿼리 실행 실패: ' . mysqli_error($conn);
}

// 결과 해제
mysqli_free_result($result);

// 연결 종료
mysqli_close($conn);

?>