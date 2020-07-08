<?php
 $conn = mysqli_connect('localhost','sujine','zaxscd12za','data'); //mysql 연결
 if(mysqli_connect_errno()){
   echo "<script>alert ('연결 실패');</script>";  // 실패했을대 창띄우기
   error_log(mysqli_error($conn));
 }
 $sql = "SELECT * FROM board WHERE id = {$_GET['id']}"; //수행할 쿼리문,받은 id 파라미터 값에 해당하는 테이블 데이터 전부 가져오기
 $result = mysqli_query($conn,$sql);  // 쿼리문 데이터 베이스에 수행
 $row = mysqli_fetch_array($result); //쿼리문에 대해 응답결과 배열 형성
 $p = array(
   'title' => $row['title'],  //사용할 title 과 decription 내용을 배열에 저장
   'description' => $row['description']
 );
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="ha.css" />
    <title>Document</title>
  </head>
  <body>
    <h1><center><a href="index.php">Wellcome</a></h1>
     <section class="header">
      <header>
        <h2><center>Wellcome</h1>
      </header>
     </section>
     <section id="container">
       <section class="content">
        <div class="menu1">
          <h3><font color="white"><center><a href="create.php">Go to post</a></h3>
        </div>
        <div class="menu2">
          <h3><center>Home</h3>
        </div>
    </setion>
<br><br><br>

<section id="container2">

   <form action="update_process.php" method="post"> <!-- form 태그 post 방식-->
   <br><br><br><br><br><br>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">

     <p class="p" align="center">
     <input type="text" name ="title" placeholder="제목" value ="<?=$p['title']?>"> <!-- 제목 input // value 에 기존값 넣어주기, 쿼리문으로 가져옴-->
     </p>
      <br><br><br>

      <p align="center">
      <textarea name="description" placeholder="내용을 입력하세요." cols="100" row"10" >  <?=$p['description'] ?></textarea> <!-- 내용 input// 기존값 넣어주기, 쿼리로 가져옴-->
      </p>
       <p align="center">
       <input type="submit" value="올리기">
       </p>
     </div>
   </form>
</body>
</html>
