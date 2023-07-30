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
  <script src="js/jquery-2.1.3.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="kadai_index.php"><b>ブックマーク登録</b></a>
      <a class="navbar-brand" href="kadai_select.php">ブックマーク表示</a>
      <a class="navbar-brand" href="kadai_index_user.php">ユーザー登録</a>
      <a class="navbar-brand" href="kadai_select_user.php">ユーザー表示</a> -->
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="kadai_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>書籍名：<input type="text" name="name"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label><textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<script>
if (<?=$_SESSION["kanri_flg"]?>==1) {
    $(".navbar-header").html('<a class="navbar-brand" href="kadai_index.php"><b>ブックマーク登録</b></a><a class="navbar-brand" href="kadai_select.php">ブックマーク表示</a><a class="navbar-brand" href="kadai_index_user.php">ユーザー登録</a><a class="navbar-brand" href="kadai_select_user.php">ユーザー表示</a>')
  }else{
    $(".navbar-header").html('<a class="navbar-brand" href="kadai_index.php"><b>ブックマーク登録</b></a><a class="navbar-brand" href="kadai_select.php">ブックマーク表示</a>')
  }
</script>

</body>
</html>