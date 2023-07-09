<?php
echo "hello!!!";

$total=0;
for ($i=0; $i<=10; $i++) {
    $total=$total+$i;
    echo $i;
}
echo $total;

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1+2は<?php echo 1+2; ?>です</h1>
    <?php echo"<h2>今年の抱負</h2>"?>
</body>
</html>