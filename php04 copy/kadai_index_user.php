<?php
session_start();
include("kadai_funcs.php");
sschk();//これを入れるとログインチェックができる
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-2.1.3.min.js"></script>
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="kadai_index.php">ブックマーク登録</a>
      <a class="navbar-brand" href="kadai_select.php">ブックマーク表示</a>
      <a class="navbar-brand" href="kadai_index_user.php"><b>ユーザー登録</b></a>
      <a class="navbar-brand" href="kadai_select_user.php">ユーザー表示</a> -->
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="kadai_insert_user.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>name：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PW：<input type="password" name="lpw"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<script>
  if (<?=$_SESSION["kanri_flg"]?>==1) {
    $(".navbar-header").html('<a class="navbar-brand" href="kadai_index.php">ブックマーク登録</a><a class="navbar-brand" href="kadai_select.php">ブックマーク表示</a><a class="navbar-brand" href="kadai_index_user.php"><b>ユーザー登録</b></a><a class="navbar-brand" href="kadai_select_user.php">ユーザー表示</a>')
  }else{
    $(".navbar-header").html('<a class="navbar-brand" href="kadai_index.php">ブックマーク登録</a><a class="navbar-brand" href="kadai_select.php">ブックマーク表示</a>')
  }
</script>

</body>
</html>