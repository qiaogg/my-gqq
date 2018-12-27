<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>更新 | 专业 </title>
</head>
<body>

<?php   
    require_once'../inc/db.php';
    require_once '../inc/common.php';

    $id = $_POST['id'];
    $sql = " update intro set mname = '{$_POST["title"]}',minfo= '{$_POST["body"]}' where id = '{$id}' ";

    if(!mysqli_query($db,$sql)){
    	echo mysqli_error($db);
    	echo '<br>' . $sql;
    }else{
        redirect_to("./show.php?id={$id}");
    };

?>
</body>
</html>