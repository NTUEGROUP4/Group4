<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
	include("mysql_connect.php");
	$serial = $_POST['serial']; 
	$type = $_POST['type'];
	$name = $_POST['name'];
	$content = $_POST['content'];
	$button = $_POST['button'];
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_學習網</title>
//此頁面的標題
</head>

<body>
<div id="HEADER">
	<h2>電腦科學學習網</h2>
	//以h2字體為大小的子標題
</div>
<div id="MAIN_NAV">
//方便排版的標籤，內含一個表格
	<ul>
		<li><a href="reading.php">開始閱讀</a></li> 
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</li>
		<li><a href="group.php">管理團隊</a></li>
		<li><b>管理者專區</b></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
		//表格中含有八個鏈結，每個鏈結可通往不同頁面，現在位於管理者專區的頁面
	</ul>
</div>
<div id="CONTENT">
	<p>
		<h2>管理者專區<br/></h2>
		<br/>
		<br/>
		<center>
		<?php
			if($button === "新增"){
				$sql = "INSERT INTO reading (serial, type, name, content) VALUES ('$serial', '$type', '$name', '$content')";//要insert的value值
				$result = mysql_query($sql);
				if (!$result) {
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已新增.....</h3>";
			}
			//當按下新增按鈕時，會將使用者打的四項加入資料庫，之後判斷result，錯誤出現error，正確則顯示資料已新增
			else if($button === "修改"){
				$sql = "UPDATE reading SET serial='$serial', type='$type', name='$name', content='$content' WHERE serial='$serial'";//要update的value值
				$result = mysql_query($sql);
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				echo "<h3>資料已修改.....</h3>";
			}
			//與新增按鍵相同作用
						
		?>
		</center>
	</p>	
</div>
<div id="FOOTER">	
	<p>
		<br/><br/><br/><br/><br/><br/>
		<h2><center><br/>Author by <i>Yi-Chan Kao</i> & <i>Gung-Si Chen</i> </center></h2>
	</p>
</div>
</body>
</html>
