<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="ha.css" /> <!--Css연결-->
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
    </setion>
<br><br><br>



<section id="container2">

   <form action="create_process.php" method="post"> <!--post 방식으로 전달-->
      <!--form 에 있는 데이터 웹서버로 전달 후 웹프로그램이 처리-->
   <br><br><br><br><br><br>
     <p class="p" align="center"><font color="balck">
     <input type="text" name ="title" placeholder="제목"> <!--제목 input-->
     </p>
      <br><br><br>
      <p align="center">
      <textarea name="description" placeholder="내용을 입력하세요." cols="100" row"50"></textarea> <!--내용 input-->
      </p>
       <p align="center">
       <input type="submit" value="올리기">   <!--전송하기-->
       </p>
    </section>
    </form>
</body>
</html>
