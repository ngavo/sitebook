<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List-books</title>
<link rel="stylesheet" href="css.css?<?php echo time(); ?>" type="text/css" >
</head>

<body>
	
	<?php 
		mysql_connect('localhost','root','') or die ('error connected');
		
		mysql_select_db('books') or die ('not found');
		
		$query = mysql_query('SELECT * FROM listbooks') or die ('not table' . mysql_error());
	?>
    	
    	<div class="wrapper">
        <a href="ListBook.php">Home</a>
        <div class="header">
        	<a href="DangNhap.php" style="float:right;">Đăng Nhập</a>
        	<h1 style="text-align:center; margin-bottom:20px; margin-top:20px;">Danh Sách</h1>
        </div>
        <hr>
	<?php	while($value=mysql_fetch_array($query))
		{?>
        
        	<div class="content">
            	<div class="left">
                 <a href="description.php?id=<?php echo $value['ISBN-10']; ?>"><img src="Images/<?php echo $value['Image']; ?>" width="200px" height="300px" title="<?php  echo $value['Image']; ?>" > </a>
                </div>
                <div class="right">
                  	<div class="text">
                	<a href="description.php?id=<?php echo $value['ISBN-10']; ?>"><h2> <?php echo $value['Name']; ?> </h2></a>
                    <p style="color:#666; font-size:15px"> By author: <?php echo $value['Author']; ?> </p>
                    <p><?php echo $value['Description']; ?> </p>
                    </div>
                </div>
            </div>
            <hr>
		<?php } ?>
	
    </div>
</body>
</html>