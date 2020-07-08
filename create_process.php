
<?php
$conn = mysqli_connect('localhost','sujine','zaxscd12za','data');//mysql 연결

$sql = "
    INSERT INTO board (
        title,
        description,
        created
    ) VALUES (
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )"; //수행할 쿼리문
$result = mysqli_query($conn, $sql); //쿼리를 데이터베이스에 작동되게
$result2 = mysqli_query($conn, $sql2);
if($result === false){   //에러가 났다면
  echo "<script>alert ('업로드 실패');</script>"; //안내창 띄우기
 //echo mysqli_error($conn);
  error_log(mysqli_error($conn)); //에러 로그저장
}else {
 header ("Location:index.php"); //웹페이지 이동시키기
}

?>
