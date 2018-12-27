<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>新增 | 专业 </title>
</head>
<body>

<?php   

    require_once'../inc/db.php';
    require_once '../inc/common.php';

    $sql = "INSERT INTO major (mname, minfo)VALUES('$_POST[mname]','$_POST[minfo]')";

    if(!mysqli_query($db,$sql)){
        echo mysqli_error($db);
        echo '<br>' . $sql;
    }else{
        redirect_to("./index.php");
    };

?>
</body>
</html>