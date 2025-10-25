<?php

// 로그인 처리 부분
/*
2025-10-23
일단 순서대로 정리 해보고 시작
1. DB의 값들을 불러옴
2. DB의 ID를 비교
3. DB의 ID줄의 Passwd 와 같은지 비교
4. 로그인 성공/실패 결정
*/

session_start();
$test = null;
$prevPage = $_SERVER['HTTP_REFERER'];


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
//폼에서 온 값 변수
$id = $_POST['id'];
$passwd = $_POST['password'];
$email = $_POST['email'];

//echo "<br>" . $id . "<br>" . $passwd . "<br>" . $email . "<br>";

$query = "INSERT INTO login(idx, id, passwd, email) VALUES(DEFAULT , '$id', '$passwd', '$email')";

echo "<br>" . $id . "<br>" . $passwd . "<br>" . $email . "<br>";
echo $query;
//echo mysqli_error($conn);
$result = mysqli_query($conn, $query);
//echo mysqli_error($conn);

if($result)
{
    $test = "회원가입 성공";
    echo $test;
    $_SESSION['test'] = $test;
    
}
else
{
    $test = "회원가입 실패";
    echo $test;
    $_SESSION['test'] = $test;
    
}
header('location:login.php');

/*
if ($result) 
{
    // 결과 처리
    while ($row = mysqli_fetch_assoc($result)) 
        {
            //echo $row['id'] . ' : ' . $row['passwd'] . '<br>';

            if($_POST["id"] == $row['id'] && $_POST["password"] == $row['passwd'])
            {
                
                echo "post_id : " . $_POST["id"] . '<br>';
                echo "post_password : " . $_POST["password"] . '<br>';
                
                echo "row_id : " . $row['id'] . '<br>';
                echo "row_password : " . $row['passwd'] . '<br>';

                $test = "login success";
                
                //echo $test . '<br>';
                header('location:main.php');
                break;
            }

            else
            {
                $test = "<br>login failed<br>";
                header('location:'.$prevPage);
            }

             
        }
}
else 
{

    echo '쿼리 실행 실패: ' . mysqli_error($conn);
}


$_SESSION['test'] = $test; 
echo '<h1><br>' . $test . '<br></h1>';

// 로그인 처리 부분 끝

*/
// 결과 해제
mysqli_free_result($result);

// 연결 종료
mysqli_close($conn);



?>