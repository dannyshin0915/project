<?php  
	include "../db3.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>VM 생성</title>
</head>
<body>
	<form method="post" action="cloud_ok.php">
		<h1>VM 생성</h1>
			<fieldset>
				<legend>입력사항</legend>
					<table>
						<tr>
							<td>User ID</td>
							<td><input type="text" size="35" name="userid" placeholder="아이디"></td>
						</tr>
						<tr>
							<td>PASSWORD</td>
							<td><input type="password" size="35" name="userpw" placeholder="비밀번호"></td>
						</tr>
						<tr>
							<td>CPU</td>
							<td><input type="text" size="35" name="cpu" placeholder="CPU 코어 수"></td>
						</tr>
						<tr>
							<td>RAM</td>
							<td><input type="text" size="35" name="ram" placeholder="RAM 용량"></td>
						</tr>
						<tr>
							<td>DISK</td>
							<td>HDD<input type="radio" name="disk" value="HDD"> SSD<input type="radio" name="disk" value="SSD"></td>
						</tr>
						<tr>
							<td>Volume</td>
							<td><input type="text" size="35" name="volume" placeholder="volume (GB)"></td>
						</tr>
					</table>

				<input type="submit" value="등록" /><input type="reset" value="다시쓰기" />
			
		</fieldset>
	</form>
</body>
</html>
