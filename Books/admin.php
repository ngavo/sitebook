<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="admin.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
<?php
	mysql_connect('localhost','root','');
	mysql_select_db('books');
   $query	= mysql_query('select*from listbooks ORDER BY `listbooks`.`ISBN-10` ASC');
   $query2 = mysql_query('select*from description ORDER BY `ISBN-10` ASC');
?>
<script type="text/javascript">
	function Xoa()
	{
		return confirm("bạn có muốn xóa không");
	}
</script>
</head>

<body>
	<a href="ListBook.php">Home</a>
 <?php
	session_start();
	if(!isset($_SESSION['name']))
	{?>
    	<script language="javascript">
		alert('đang nhặp trc');
		window.location.href="dangnhap.php";
		</script>
	<?php }
	else
	{?>
    	<div class="wrapper">
       <a href="them.php"><button>Thêm</button></a>
    	<table class="table" style="border:1px solid #000">
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
                <td>Delete</td>
                <td>Edit</td>
              </tr>
            </thead>
            <tbody
    
    <?php
		while($row=mysql_fetch_array($query) and $row2=mysql_fetch_array($query2))
		{ ?>
        	<tr>
            	<td><?php echo $row['ISBN-10'] ."</br>"; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><img src="Images/<?php echo $row['Image']; ?>" width="80px" height="90px" ></td>
                <td><?php echo $row['Author']; ?></td>
                <td><?php echo $row2['Year']; ?></td>
                <td><?php echo $row2['Pages']; ?></td>
                <td><?php echo $row2['Language']; ?></td>
                <td><?php echo $row2['FileSize'] ?></td>
                <td><?php echo $row2['FileFormat'] ?></td>
                <td><?php echo $row2['Category'] ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row2['BookDescription']; ?></td>
                <td><a href="?page=xoas&mas=<?php echo $row['ISBN-10']; ?>" onClick="return Xoa()">Delete</a></td>
                <td><a href="edit.php?page=suas&mas=<?php echo $row['ISBN-10']; ?>">Edit</a></td>
            </tr>
		  
	<?php	} ?>
    
    	</tbody>
		</table>
       </div>
	<?php }
	 ?>
     
     <?php
		
			if(isset($_GET['page']) and $_GET['page']=='xoas')
			{
			if(mysql_query('delete from `listbooks` where `ISBN-10`="'.$_GET['mas'].'"') and mysql_query('delete from `description` where `ISBN-10`="'.$_GET['mas'].'"') )
			{ ?>
               <script type="text/jscript">
			    confirm('xóa thành công');
				window.location.href="admin.php";
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