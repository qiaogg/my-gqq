<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>编辑 | 博客 </title>
</head>
<body>
  <?php
require_once './inc/db.php';

$id    = $_GET['id'];
$sql   = 'select * from intro where id = ' . $id;
$query = mysqli_query($db, $sql);
$post  = mysqli_fetch_object($query);
?>

	<h1>编辑学校: <?php echo $post->id; ?></h1>

	<form action="update1.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $post->id; ?>"/>
		<label for="title">schname</label>
		<input type="text" name="title" value="<?php echo $post->schname; ?>" />
		<br/>
		<label for="body">info</label>
		<textarea name="body">
			<?php echo $post->info; ?>
		</textarea>
		<br/>
		<input type="submit" value="提交" />
	</form>

</body>
</html>