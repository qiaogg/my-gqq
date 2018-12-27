<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>更新 | 评论 </title>
</head>
<body>

<?php   
    require_once'../inc/db.php';
    require_once '../inc/common.php';
    $article_id=$_POST['article_id'];
    $body=$_POST['body'];
    $create_time=$_POST['create_time'];
    $sql ="INSERT INTO discuss (article_id, content,create_time)VALUES('$article_id','$body','$create_time')";
    if(!mysqli_query($db,$sql)){
    	echo mysqli_error($db);
    	echo '<br>' . $sql;
    }else{
        redirect_to("./show.php?id={$_POST['article_id']}");
    };

?>
</body>
</html>