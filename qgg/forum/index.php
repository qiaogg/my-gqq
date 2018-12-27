<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>论坛</title>
	
	<style>
		.main{
			
		}
	</style>
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
        .catalog ul,li{
            margin: 0px;
            padding: 1px;
            list-style: none;
        }
        .catalog ul{
        	width:55%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .catalog li{
        	width:20%;
            border: 0px;
            text-align: center;
            margin-top: 4px;
            margin-bottom: 4px;
            flex:auto;  /*这是关键*/            
        }
        .catalog a{
        	width: 95%;
        	margin: 0px;
            padding: 0px;           			
        }
        .img-group {  position: relative;  display: inline-block;}
        .img-tip {  position: absolute;  top: 5%; left: 28%;  background: rgba(0,0,0,0.4);  color: rgba(255,255,255,0.7);  padding: 1px; border-radius: 5px;}
        .img{
          width: 45%;
          border-radius:25px;
          border:15px solid rgba(255,255,255,0.5);
        }
        a{
        	text-decoration:none;
        }
  </style>
</head>
<body>
    
	<div style="text-align:center">
        <h1>学校照片墙</h1>
        <ul>
        <?php
         require_once $_SERVER['DOCUMENT_ROOT']."./inc/db.php";
         $query=$dbb->query("select * from pic");
         while ($pic=$query->fetchObject()) {
            echo "<div class=\"img-group\">";
            echo "<img class=\"img\" src=\"./pic/$pic->path\"/>";
            echo "<div class=\"img-tip\">$pic->title</div></div>";
         }
        ?>
        </ul>
	<h3>上传你的大学的照片</h3>
	<div class="main">
        <form action="save.php" method='post' enctype="multipart/form-data">
 			<input type="file" name="file" onchange="PreviewImage(this,'imgHeadPhoto','divPreview');" style="width:400px"/>
            <div id="divPreview">
                <img id="imgHeadPhoto" src="noperson.jpg" alt="" style="width:600px"/>
            </div>
            <p>请输入标题</p>
            <input type="text" name="title">
            <input type="submit"/>
        </form>
    </div>
	<script src="../js/uploadpic.js"></script>
</body>
</html>