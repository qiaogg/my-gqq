<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>注册提交 </title>
</head>
<body>

<?php   

    require_once'./inc/db.php';
    require_once './inc/common.php';

    $sql = "INSERT INTO intro (schname, info)VALUES('$_POST[schname]','$_POST[info]')";

    if(!mysqli_query($db,$sql)){
        echo mysqli_error($db);
        echo '<br>' . $sql;
    }else{
        redirect_to("./introduction.php");
    };

?>
</body>
</html>