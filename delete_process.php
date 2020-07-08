<?php
$conn = mysqli_connect('localhost','sujine','zaxscd12za','data');
//settype($_POST['id'],'integer');
$sql = "
  DELETE
    FROM board
      WHERE
        id = '{$_GET['id']}'
    ";
$result = mysqli_query($conn, $sql); //쿼리를 데이터베이스에 작동되게
if($result === false){
  echo "<script>alert ('삭제 실패');</script>";
  error_log(mysqli_error($conn));
}else {
   header ('Location: /index.php');
}
 ?>
