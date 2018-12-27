<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页 - 大学网</title>
  <style type="text/css">
        *{
          	margin:0 auto;
          	padding:0 auto;
        }
        html{
        	position:absolute;
          	background:url(../image/08.jpg) no-repeat fixed center;
          	width:100%; 
          	background-size:100%;
        }
        a{
        	text-decoration:none;
        }
  </style>
</head>

<body>
	<div style="text-align:center">
		<h1>学校简介列表</h1>
	  	<table border=1>
	    <thead>
	      <tr>
	        <th>id</th>
	        <th>学校名称</th>
          <th>分类</th>
          <th>操作</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php
  require_once '../inc/db.php';
	$result = mysqli_query($db, "select * from intro");
	while ($row = mysqli_fetch_row($result)) {
	    ?>
	          <tr>
	            <td><?php echo $row[0] ?></td>
	            <td><a href="show.php?id=<?php echo $row[0] ?>"><?php echo $row[1]; ?></a></td>
              <td><?php echo $row[3]; ?></td>
              <td>
              <a href="edit.php?id=<?php echo $row[0] ?>">改</a>
              <a href="delete.php?id=<?php echo $row[0] ?>">删</a>
              </td>
	          </tr>
	        <?php }?>

	    </tbody>
	  </table>
  <a href="../index.html">返回首页</a>
  <a href="new.html">新增学校</a>
  </div>
</body>
</html>
