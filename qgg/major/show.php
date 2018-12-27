<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>内容 | 专业</title>
</head>
<body>
  <?php
require_once '../inc/db.php';

$id    = $_GET['id'];
$sql   = 'select * from major where id = ' . $id;
$query = mysqli_query($db, $sql);
$post  = mysqli_fetch_object($query);
?>

  <h1><?php echo $post->mname; ?>  </h1>
  <p><?php echo $post->minfo; ?></p>

</body>
</html>