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
        table{
          width:40%;
          border-radius:30px;
          background-color:rgba(0,0,128,0.2);
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
        a{
        	text-decoration:none;
        }
  </style>
</head>

<body>
	<div style="text-align:center">
		<h1>学校简介列表</h1>
		<div class="catalog" align="center">
			<ul>
			<li><a href="?catalog=1">所有学校</a></li>
  			<?php 
  				require_once '../inc/db.php';
	  			$csql = 'select distinct catalog from intro';
				$cquery= mysqli_query($db, $csql);
	  			while($catalog=mysqli_fetch_row($cquery)){
	  				echo "<li><a href='?catalog=$catalog[0]'>$catalog[0]</a></li>";
	  			}
  			?>
  			</ul>
  		</div>
	  	<table border=0>
	    <thead>
	      <tr>
	      </tr>
	    </thead>
	    <tbody>
	      <?php
	$result = mysqli_query($db, "select * from intro");
	while ($row = mysqli_fetch_row($result)) {
		if($_GET['catalog']==1||$_GET['catalog']==$row[3]){
	    ?>
	          <tr>
	            <td><a href="show.php?id=<?php echo $row[0] ?>"><?php echo $row[1] ?></a></td>
	          </tr>
	        <?php }}?>

	    </tbody>
	  </table>
  <a href="../index.html">返回首页</a>
  </div>
</body>
</html>
