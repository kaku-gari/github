<html>
<head>
<meta charset="utf-8">
<title>アンケート結果</title>
</head>
<h1>アンケート結果</h1>

<?php
$file = fopen("data/data.txt","r");
while ($str=fgets($file)){
    echo nl2br($str); //改行文字の前にhtmlのbrタグを挿入
}
fclose($file);
?>


<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>