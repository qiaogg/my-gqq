<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>删除 | 专业</title>
</head>
<body>	
<?php        
    require_once'../inc/db.php';

    $id = $_GET['id'];
    $sql = 'select * from major where id = '.$id;
    $query = mysqli_query($db,$sql);
    $post = mysqli_fetch_object($query);
  ?>

	<form action="update2.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $post->id ?>"/>
		确定删除id为<?php echo $post->id ?>的专业?
		<input type="submit" value="确定">
	</form>	
</body>
</html>