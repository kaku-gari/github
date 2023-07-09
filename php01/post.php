<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
<link rel="stylesheet" href="style.css">
</head>
<h1>明日の為替は？</h1>
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

<form action="write.php" method="post">
	<p>Q1.あなたの職業は？　　
		<select name="job">
		<option value=0>金融業界</option>
		<option value=1>その他</option>
		</select>
	</p>
	<p>Q2.明日のUSD/JPYは？　
		<select name="result">
		<option value=1>上がる</option>
		<option value=0>横ばい</option>
		<option value=-1>下がる</option>
		</select>
	</p>
	<p><input type="submit" value="送信"></p>
</form>

<a href="index.php">index.php</a>
</body>
</html>