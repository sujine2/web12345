<?php
 $conn = mysqli_connect('localhost','sujine','zaxscd12za','data'); //mysql 연결
 if(mysqli_connect_errno()){
   echo "<script>alert ('연결 실패');</script>";  //실패했을때 경고창 띄우고 오류 저장하기
   error_log(mysqli_error($conn));
 }
 $sql = "SELECT * FROM board WHERE id = {$_GET['id']}"; //수행할 쿼리문, get으로 받아온 id 값에 해당하는 테이블 요소 전부 가져오기
 $result = mysqli_query($conn,$sql);  //쿼리문 데이터 베이스에 실행
 $row = mysqli_fetch_array($result);  //쿼리의 대답 배열화, 테이블요소에 대한 정보
 $p = array(
   'title' => $row['title'],
   'description' => $row['description']  //필요한 테이블 요소들
 );

 ?>

<html>
  <head >
    <style>
         h5 {
        z-index: 1000;
       color: black;
        }
</style>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="ha.css" />
    <title>Document</title>
  </head>
  <body>
    <h1><center>Wellcome</h1>
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
          <h3><center><a href="index.php">Home</a></h3>
        </div>
        <br><br><br><br><br><br>

       <h6 class = view2><font size="50px" color="black">
         <?=$p['title']?>    <!--쿼리로 받아온 title 요소 , 게시글제목-->
      </font></h6>

    <div class = "button1">
      <td><input type='button' value='수정하기' onclick="location.href='update.php?id=<?=$_GET['id']?>'"></td>  <!--수정-->
      <td ><input type='button' value='삭제하기' onclick="location.href='delete_process.php?id=<?=$_GET['id']?>'"></td>  <!--삭제-->
    </div>
      <h5 class = view>
        <?=$p['description'] ?>   <!--쿼리로 받아온 description 요소 , 게시물 내용-->

      </h5>
     </setion>
     </setion>

  <section class = "comment">
        <div id="disqus_thread"></div>   <!--댓글 타사이트에서 가져오기-->
    <script>

    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://web1-2.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    </section>
</body>
</html>
