<html>
<head>
<meta charset="utf-8">
<title>明日の為替は？</title>
<link rel="stylesheet" href="style.css">
</head>
<h1>明日の為替は？</h1>
<body>

<h1></h1>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_d83ba"></div>
  <div class="tradingview-widget-copyright"><a href="https://jp.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">TradingViewですべてのマーケットを追跡</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 750,
  "height": 500,
  "symbol": "FX:USDJPY",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "ja",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_d83ba"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->

<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES); 
    //特殊文字をHTMLエンティティに変換(例< → &lt;)
}

$job=h($_POST["job"]);
$result=h($_POST["result"]);
//文字作成
$str = date("Y-m-d H:i:s").",".$job.",".$result;
// var_dump($_POST); // フォームから受信した値が配列として格納される

//File書き込み
$file_a = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file_a, $str."\n"); //ファイル書き込み
fclose($file_a);

//File読み込み⇒配列化
$file_r = fopen("data/data.txt","r");	// ファイル読み込み

$total_result=0;
$total_count=0;
$total_up=0;
$total_stay=0;
$total_down=0;

$weight=5;

//データの読み込み・処理
while ($data=fgetcsv($file_r)){
    // var_dump($data);
    if ($data[1]==0){
        //職業=金融業界の場合
        $total_result+=$data[2]*$weight;
        $total_count+=$weight;

        if($data[2]==1){
            $total_up+=$weight;
        }else if($data[2]==0){
            $total_stay+=$weight;
        }else{
            $total_down+=$weight;
        }
        
    }else{
        //職業=その他の場合
        $total_result+=$data[2]*1;
        $total_count+=1;

        if($data[2]==1){
            $total_up+=1;
        }else if($data[2]==0){
            $total_stay+=1;
        }else{
            $total_down+=1;
        }
    }
    // echo $data[2];
}
fclose($file_r);

//出力
$prob=[
    round($total_up/$total_count*100,1),
    round($total_stay/$total_count*100,1),
    round($total_down/$total_count*100,1)
];


// echo "<p>"."結果".$total_result."</p>";
// echo "<p>"."投票数(重みあり)".$total_count."</p>";
// echo "<p>"."上昇".$total_up."</p>";
// echo "<p>"."下落".$total_down."</p>";
// echo "<p>"."横這い".$total_stay."</p>";

echo "<p>投票結果</p>";
echo "<p>"."上昇".$prob[0]."%"."</p>";
echo "<p>"."横這い".$prob[1]."%"."</p>";
echo "<p>"."下落".$prob[2]."%"."</p>";

$day_start=substr($str,0,11)." 00:00:00";
$day_end=substr(date("Y-m-d H:i:s",strtotime("1 day")),0,11)." 00:00:00";
?>


<div id="graph"></div>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>

</body>
</html>