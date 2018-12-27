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
  <table border=1>
    <div style="text-align:center">
    <h1>专业简介列表</h1>
    <br>
    <thead>
      <tr>
        <th>专业名称</th>
      </tr>
    </thead>
    <tbody>
      <?php
    require_once '../inc/db.php';
    $result = mysqli_query($db, "select * from major");
    while ($row = mysqli_fetch_row($result)) {
       ?>
          <tr>
            <td><a href="show.php?id=<?php echo $row[0] ?>"><?php echo $row[1] ?></a></td>
          </tr>
        <?php }?>

    </tbody>
  </table>
</body>
</html>
