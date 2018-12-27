<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>内容 | 学校</title>
  <style type="text/css">
   	body{ 
   		position:absolute;
	  	background:url(image/07.jpg) no-repeat fixed center;
	  	width:100%; 
	  	background-size:100%;
	  	overflow-x:hidden;}
	li,#list{
		list-style-type:none;
		color:#ffffff;
		text-shadow:0px 0px 8px #000000;
	}
  </style>
</head>
<body>
  <?php
require_once '../inc/db.php';

$id    = $_GET['id'];
$sql   = 'select * from intro where id = ' . $id;
$query = mysqli_query($db, $sql);
$post  = mysqli_fetch_object($query);
?>
	 <div align="center">
  		<h1><?php echo $post->schname; ?>  </h1>
 	 	<p style="width:70%;text-align:center"><?php echo $post->info; ?></p>
		<p class="big">评论区</p>
	    <form name="form1" action="commentupdate.php" method="post">
			<input type="hidden" name="article_id" value="<?php echo $id; ?>">
			<input type="hidden" name="create_time" value="<?php echo date("Y:m:d H:i:s",time()); ?>">
		    <textarea name="body" id="body" rows="8" style="resize:none;width:50%"></textarea>
		    <br>
		    <button onclick="return check()">提交评论</button>
   	    </form>
   		<p id="list">评论列表</p>
   <?php 
   	 $sql = 'select * from discuss where article_id = '.$id;
   	 $query = mysqli_query($db,$sql);
   ?>
   <ul>
   	<?php 
   		while($row=mysqli_fetch_row($query)){ 
   			if($row[3]==$id){?>
   		<li>
   			<p><?php echo $row[2]; ?></p>
   			<p><?php echo $row[1]; ?></p>
   		</li>
   	<?php }}; ?>
   </ul>
</div>
<script>
	function check(){
		var obj = document.getElementById("body");
        var str = document.form1.body.value;
		if(str.replace(/\s/g, "")!=""){
			return true;
		}else{
			alert("内容为空\n评论失败！");
			return false;
		}
	}
</script>
</body>
</html>