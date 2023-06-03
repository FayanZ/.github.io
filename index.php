<!DOCTYPE html>
<html>
<head>
	<title>赵菲莹的留言板</title>
</head>
<body>
	<h1>留言板</h1>

	<form method="post" action="">
		<label for="name">姓名：</label>
		<input type="text" name="name" id="name"><br>

		<label for="message">留言：</label><br>
		<textarea name="message" id="message" rows="10" cols="30"></textarea><br>

		<input type="submit" value="提交">
	</form>

	<?php
	//提交表单后显示留言
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$message = $_POST["message"];

		echo "<h2>留言列表</h2>";
		echo "<p>";
		echo "<strong>" . $name . ":</strong> " . $message;
		echo "</p>";
	}
	?>

</body>
</html>