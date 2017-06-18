<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="dangnhap.css" rel="stylesheet" type="text/css">
<?php
	mysql_connect('localhost','root','') or die('không kết nối được đến CSDL');
	mysql_select_db('books');
	session_start();
	 
	 if(isset($_POST['submit']))
	 {
	 $query = mysql_query('select*from login where `Name`="'.$_POST['user'].'" and `Password`="'.$_POST['password'].'"');
	 
	 if(mysql_num_rows($query)>0)
	 {
		 $_SESSION['name']= $_POST['user'];
		 ?>
     	<script language="javascript">
			window.location.href="admin.php"
		</script>
		
	<?php }
	else
	{
		echo 'chua đung nhap dung';
	}
	 }
?>
</head>

<body>
    <div class="wrapper">
    <a href="ListBook.php">Home</a>
	<form action="DangNhap.php" method="post">
    <p class="username"> UseName: <input type="text" name="user"></p>
    <p class="password"> Password: <input type="password" name="password"></p>
    <p><input type="submit" value="Đăng Nhập" name="submit"></p>
    </form>
    </div>
</body>
</html>