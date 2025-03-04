<!DOCTYPE html>
<html lang="zh-tw">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>廖翊婷簡介</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Tzyy-Ching Yang";
		}
	</script>


</head>
<body>
	<table width="70%">
		<tr>
			<td><img src="cliff.jpg" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"></img></td>
			<td>
				<h1>廖翊婷</h1>
				<h2 id="h2text">Liao-YeeTing</h2>
			</td>
		</tr>
	</table>
<table width="70%" border="1">
	<tr>
		<td>
			靜宜大學:<a href="https://www.pu.edu.tw/">https://www.pu.edu.tw/</a><br>
			ig:<a href="https://www.instagram.com/l_.0306/?hl=zh-tw" target="_blank">https://www.instagram.com/l_.0306/?hl=zh-tw</a><br>
			tel:<a href="tel:0921123456">0921123456</a><br>
			E-MAIL:<a href="a0932111445@gmail.com">a0932111445@gmail.com</a><br>
		</td>

		<td>
		大象席地而坐電影配樂<br>
		<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
		</audio><br>
		</td>

		<td>
		不要去臺灣<br>
		<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
		</td>
	</tr>
</table>
	<table>
	<tr>
		<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/c4fed3a0-7a19-4289-bf86-9767bfece31c">
</iframe>
	</tr>
</table>

	

<?php echo date("Y-m-d") ?>




</body>
</html>