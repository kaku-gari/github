<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name =$_POST["name"];
$url =$_POST["url"];
$comment =$_POST["comment"];


//2. DB接続します
try {
  //pdoは①どこに接続するか②Password:MAMP='root'③XAMPP=''の3つの引数をとる
  $pdo = new PDO('mysql:dbname=purplerhino4_gs_db_book;charset=utf8;host=mysql57.purplerhino4.sakura.ne.jp','purplerhino4','password');
  // $pdo = new PDO('mysql:dbname=gs_db_book;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DB Connection Error:'.$e->getMessage());
}



//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,url,comment,date)VALUES(:name, :url, :comment, sysdate());");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: kadai_index.php");
  exit();

}
?>
