<?php
$conn = mysqli_connect('localhost','sujine','zaxscd12za','data'); //mysql 연결
$sql = "
    UPDATE board
      SET
        title =  '{$_POST['title']}',
        description =  '{$_POST['description']}'
      WHERE
        id = {$_POST['id']}
    ";  //수정 쿼리문
$result = mysqli_query($conn, $sql); //쿼리를 데이터베이스에 작동되게
if($result === false){  //에러가 났다면
  echo "<script>alert ('업로드 실패');</script>"; //업로드 실패 경고창
 //echo mysqli_error($conn);
 error_log(mysqli_error($conn)); //에러코드 저장
}else {
   header ("Location:index.php");
   echo "<script>alert ('업로드 성공');</script>";
}
?>
