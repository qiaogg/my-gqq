<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>保存</title>
</head>
<body>
	<?php 
		require_once $_SERVER['DOCUMENT_ROOT']."./inc/db.php";
		if(empty($_FILES['file']['tmp_name'])){
            echo "<p>没有上传图片</p>";
        }else if($_FILES["file"]["error"]){
            echo $_FILES["file"]["error"];    
        }else{
            //没有出错
            //加限制条件
            //判断上传文件类型图片且大小不超过102400000B
            $filetype = array("image/jpg","image/jpeg","image/gif","image/bmp","image/png");
            if(in_array($_FILES["file"]["type"]."", $filetype)&&$_FILES["file"]["size"]<102400000){
                //防止文件名重复
                $filename =time().rand(0,9).$_FILES["file"]["name"];
                $filepath =$_SERVER['DOCUMENT_ROOT'] ."./forum/pic/". $filename;
                //检查文件或目录是否存在
                if(file_exists($filepath)){
                    echo"该文件已存在";
                }else {  
                    //保存文件,   move_uploaded_file 将上传的文件移动到新位置 
                    move_uploaded_file($_FILES["file"]["tmp_name"],$filepath);//将临时地址移动到指定地址 
                    $query=$dbb->prepare("INSERT INTO pic (path, title)VALUES(:path,:title)");
                    $check_pic=1;
                    $query->bindValue(':path',$filename,PDO::PARAM_STR);
                    $query->bindValue(':title',$_POST['title'],PDO::PARAM_STR);
                    if(!$query->execute()){
                    	echo "储存图片路径出错";
                    }else{
                    	
                    }
                }        
            }else{
            	echo "文件过大或类型错误";
            }
        }
	?>
	<h2>提交成功</h2>
	<br>
	<h3>是否返回上一级</h3>
	<a href="index.php">是</a>
</body>
</html>