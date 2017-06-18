<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
	mysql_connect('localhost','root','');
	mysql_select_db('books');
?>
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
<style>
td
{
	border: 1px solid #000;
}
table
{
	border-collapse:collapse;
	text-align:center;
}
</style>
</head>

<body>
	<?php 
	session_start();
	if(!isset($_SESSION['name']))
	{ ?>
    	<script type="text/javascript">
			alert('ban phai dang nhap truoc');
			window.location.href = "DangNhap.php";
		</script>
		
<?php	}
	else
	{ ?>
    	<a href="ListBook.php">Home</a>
    	<form action="#" method="post" enctype="multipart/form-data">
    	<table>
        	<thead>
             <tr>
            	<td>ISBN-10</td>
                <td>Name</td>
                <td>Image</td>
                <td>Author</td>
                <td>Year</td>
                <td>Pages</td>
                <td>Languages</td>
                <td>FileSize</td>
                <td>FileFormat</td>
                <td>Category</td>
                <td>Desception</td>
                <td>Desception detail</td>
              </tr>
            </thead>
            <tbody>
               <td><input type="text" name="ISBN"></td>
               <td><input type="text" name="Name"></td>
               <td >
                <input name="file" id="f" type="file" onChange="file_change(this)" style="display:none" />
                <input type="button" value="chọn ảnh" onClick="document.getElementById('f').click()" />
                <p><img id="img" style="display: none" width="100px;" height="100px" /></p>
               </td>
 
                <td><input type="text" name="Author"></td>
                <td><input type="text" name="Year"></td>
                <td><input type="text" name="Pages"></td>
                <td>
               
                <select name="Languages">
                	<option value="English">English</option>
                    <option value="VietNam">Viet Nam</option>
                    <option value="French">French</option>
                    <option value="Japanese">Japanese</option>
                </select>
                </td>
                <td><input type="text" name="FileSize"></td>
                <td><input type="text" name="FileFormat"></td>
                <td><input type="text" name="Category"></td>
                <td><textarea type="text" name="Desception"></textarea></td>
                <td><textarea type="text" name="DesceptionDetail"></textarea></td>
            </tbody>
        </table>
        	<input type="submit" value="Upload" name="ok">
		</form>
<?php	}
?>

<?php
	if(isset($_POST['ok']))
	{
		$ISBN = $_POST['ISBN'] ;
		$Name = $_POST['Name'] ;
		$file = $_FILES['file']['name'];
		$Author = $_POST['Author'] ;
		$Year = $_POST['Year'] ;
		$Pages = $_POST['Pages'] ;
		$Languages = $_POST['Languages'] ;
		$FileSize = $_POST['FileSize'] ;
		$FileFormat = $_POST['FileFormat'] ;
		$Category = $_POST['Category'] ;
		$Desception = $_POST['Desception'] ;
		$DesceptionDetail = $_POST['DesceptionDetail'] ;
		
		$query = "insert into listbooks values ('$ISBN','$file','$Name','$Author','$Desception')";
		$query1 = "insert into description values ('$ISBN','$file','$Name','$Author','$Year','$Pages','$Languages','$FileSize','$FileFormat','$Category','$DesceptionDetail')";
	$q1 =	mysql_query($query);
	$q2 =	mysql_query($query1);
		if($q1 and $q2)
		{ ?>
			<script type="text/javascript">
				confirm('thành công');
				window.location.href = "admin.php";
			</script>
	<?php	}
		else
		{
			echo 'that bai';
		}
	}
?>
</body>
</html>