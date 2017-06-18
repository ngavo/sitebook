<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
	mysql_connect('localhost','root','');
	mysql_select_db('books');
$select =	mysql_query('select * from listbooks where `ISBN-10`="'.$_GET['mas'].'"');
$select1 = 	mysql_query('select * from description where `ISBN-10`="'.$_GET['mas'].'"');
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
			var img1 = document.getElementById('img1');
			img1.style.display = 'none';
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
              <?php 
			    while($row = mysql_fetch_array($select) and $row1 = mysql_fetch_array($select1))
				{
			  ?>
               <td><input type="text" name="ISBN" value="<?php echo $row['ISBN-10']; ?>"></td>
               <td><input type="text" name="Name" value="<?php echo $row['Name']; ?>" ></td>
               <td >
                <input name="file" id="f" type="file" onChange="file_change(this)" style="display:none" />
                <input type="button" value="chọn ảnh" onClick="document.getElementById('f').click()" />
                <p><img id="img" style="display: none" width="100px;" height="100px" /></p>
                <p><img id="img1" width="100px;" height="100px" src="Images/<?php echo $row['Image']; ?>" ></p>
                <p><input type="text" name="image" value="<?php echo $row['Image']; ?>" style="display:none"></p>
               </td>
 
                <td><input type="text" name="Author" value="<?php echo $row['Author']; ?>"></td>
                <td><input type="text" name="Year" value="<?php echo $row1['Year']; ?>"></td>
                <td><input type="text" name="Pages" value="<?php echo $row1['Pages']; ?>"></td>
            <!--    <td><input type="text" name="Languages" value="<?php echo $row1['Language']; ?>"></td> -->
            	<td>
                 <select name="Languages">
                 <?php
				    if($row1['Language']=='English')
					 {
                  	   echo '<option value="English" selected="selected">English</option>';
                       echo '<option value="VietNam">Viet Nam</option>';
                       echo '<option value="French">French</option>';
                       echo '<option value="Japanese">Japanese</option>';
					 }
					 else if($row1['Language']=='VietNam')
					 {
					   echo '<option value="English" >English</option>';
                       echo '<option value="VietNam" selected="selected">Viet Nam</option>';
                       echo '<option value="French">French</option>';
                       echo '<option value="Japanese">Japanese</option>'; 
					 }
					 else if($row1['Language']=='French')
					 {
						 echo '<option value="English" >English</option>';
                       echo '<option value="VietNam" >Viet Nam</option>';
                       echo '<option value="French" selected="selected">French</option>';
                       echo '<option value="Japanese">Japanese</option>'; 
						 
					 }
					 else
					 {
						  echo '<option value="English" >English</option>';
                       echo '<option value="VietNam" >Viet Nam</option>';
                       echo '<option value="French" >French</option>';
                       echo '<option value="Japanese" selected="selected">Japanese</option>'; 
					 }
                    ?>
                 </select>
                </td>
                <td><input type="text" name="FileSize" value="<?php echo $row1['FileSize']; ?>"></td>
                <td><input type="text" name="FileFormat" value="<?php echo $row1['FileFormat']; ?>"></td>
                <td><input type="text" name="Category" value="<?php echo $row1['Category']; ?>"></td>
                <td><textarea type="text" name="Desception" cols="25" rows="50" ><?php echo $row['Description']; ?></textarea></td>
                <td><textarea type="text" name="DesceptionDetail" cols="50" rows="50"><?php echo $row1['BookDescription']; ?></textarea></td>
                <?php } ?>
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
		if(($file = $_FILES['file']['name'])=='')
		{
			$file = $_POST['image'];
		  
		}
		else
		{
			$file = $_FILES['file']['name'];
		}
		$Author = $_POST['Author'] ;
		$Year = $_POST['Year'] ;
		$Pages = $_POST['Pages'] ;
		$Languages = $_POST['Languages'] ;
		$FileSize = $_POST['FileSize'] ;
		$FileFormat = $_POST['FileFormat'] ;
		$Category = $_POST['Category'] ;
		$Desception = $_POST['Desception'] ;
		$DesceptionDetail = $_POST['DesceptionDetail'] ;
		
		$query = "update `listbooks` set `ISBN-10`='$ISBN',`Image`='$file',`Name`='$Name',`Author`='$Author',`Description`='$Desception' where `ISBN-10`='$ISBN'";
		$query1 = "update `description` set `ISBN-10`='$ISBN',`Image`='$file',`Name`='$Name',`Author`='$Author',`Year`='$Year',`Pages`='$Pages',`Language`='$Languages',`FileSize`='$FileSize',`FileFormat`='$FileFormat',`Category`='$Category',`BookDescription`='$DesceptionDetail' where `ISBN-10`='$ISBN'";
	$q1 =	mysql_query($query);
	$q2 =	mysql_query($query1);
		if($q1 and $q2)
		{ ?>
			<script type="text/javascript">
			 confirm ('thành công');
			 window.location.href='admin.php';
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