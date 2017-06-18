<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript">
	function file_change(f)
	{
		var reader = new FileReader();
		reader.onload = function(e)
		{
			var img = document.getElementById('img');
			img.src = e.target.result;
			img.style.display = 'inline';
		};
		reader.readAsDataURL(f.files[0]);
	}
</script>
</head>

<body>
<form action="#" method="post" enctype="multipart/form-data">
	<input id="f" name="file" type="file" onChange="file_change(this)" style="display:none" />
    <input type="button" value="chọn ảnh" onClick="document.getElementById('f').click()" />
    <p><img id="img" style="display: none" width="100px;" height="100px" /></p>
    <input type="submit" value="upload" name="ok" />
</form>

<?php
 if(isset($_POST['ok']))
 {
	 echo $_FILES['file']['name'];
 }
?>
</body>
</html>