<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("mysql_connect.php"); 
$id = $_POST['id']; 
$pw = $_POST['pw'];

$sql = "SELECT * FROM member where account='$id' and password='$pw'";
$row = mysql_fetch_array(mysql_query($sql));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>國立臺北教育大學_學習網</title>
</head>

<body>
<div id="HEADER">
	<h2>電腦科學學習網</h2>
</div>
<div id="MAIN_NAV">
	<ul>
		<li><b>開始閱讀</b></li>
		<li><a href="upload.php">檔案上傳</a></li>
		<li><a href="message.php">留言板</a></li>
		<li><a href="record.php">歷史紀錄</a></li>
		<li><a href="login.php">會員資料修改</a></li>
		<li><a href="group.php">管理團隊</a></li>
		<li><a href="manager_login.php">管理者專區</a></li>
		<li><a href="index.php" style="color:#FF99FF">回首頁</a></li>
	</ul>
</div>
<div id="CONTENT"> 
	<p>
	
		<center>
		<h2><?php echo $id; ?>，請選擇閱讀材料<br/></h2>
		<br/>
		<br/>
		
		<?php
			if (!$row) { 
				echo "<h3>帳號或密碼錯誤，請重新輸入</h3>";
        		echo '<meta http-equiv=REFRESH CONTENT=2;url=reading.php>';
			}
			else {
				$sql = "SELECT * FROM reading";
				$result = mysql_query($sql);
											
				if (!$result) { 
					die('Invalid query: ' . mysql_error());
				}
				
				echo "<form name='form' method='post' action='reading_start.php'>"; 
				echo "<input type='hidden' name='id' value=".$id." />";
				echo "<input type='hidden' name='pw' value=".$pw." />";
								
				echo "<table width=800 border=1>";            
				echo "<tr align=center><td>選取</td><td>編號</td><td>類型</td><td>資料名</td></tr>";		
					
				/*while($row = mysql_fetch_array($result)){     
					
					echo "<tr align=center><td><input name='select' type='radio' value=".$row['serial']."+".$row['type']."></td>"; //radio屬性，value輸出的內容				
					echo "<td>".$row['serial']."</td>";
					echo "<td>".$row['type']."</td>";
					echo "<td>".$row['name']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "<input type='submit' name='button' value='開始閱讀' />";	
				echo "</form>";
			}*/
		?>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<form name="form" method="post" action=" reading.php">
			<input type="submit" name="button" value="回上一頁" />	 
		</form>
		
		</center>
		<br/>
		<br/>
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


