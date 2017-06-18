<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="css1.css?<?php echo time(); ?>" type="text/css" rel="stylesheet">
<?php
   $id = $_GET['id'];
  $connect = mysqli_connect('localhost','root','');
  mysqli_select_db($connect,'books');
 $result =  mysqli_query($connect,"select*from description where `ISBN-10`='$id'");
 ?>
<title></title>
</head>

<body>

  <div class="wrapper">
  <a href="ListBook.php">Home</a>
  <?php
  	 while ($row = mysqli_fetch_array($result))	
  	{?>
    	<h2><?php echo $row['Name']; ?></h2>
        <div class="content">
        	<img src="Images/<?php echo $row['Image']; ?>" width="250px" height="350px">
            <div class="right">
            	<p>Author:<?php echo $row['Author']; ?></p>
                <p>ISBN-10:<?php echo $row['ISBN-10']; ?></p>
                <p>Year:<?php echo $row['Year']; ?></p>
                <p>Pages: <?php echo $row['Pages']; ?></p>
                <p>Language: <?php echo $row['Language']; ?></p>
                <p>File Size: <?php echo $row['FileSize']; ?></p>
                <p>File Format: <?php echo $row['FileFormat']; ?></p>
                <p>Category: <?php echo $row['Category']; ?></p>
            </div>
            <hr />
            <h3>Book Description</h3>
            <div><?php echo $row['BookDescription']; ?></div>
        </div>
  <?php	}?>
  </div>
</body>
</html>