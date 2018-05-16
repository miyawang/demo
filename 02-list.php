<?php 
 header('content-type:text/html;charset=utf-8');
  // 从数据库中读取数据， 根据数据库中的数据 动态生成表格
  $str = file_get_contents('data.txt');
  //echo $str; 
  //把字符串转成数组
  $arr = json_decode($str, true);
//   echo '<pre>';
//   print_r($arr);
//   echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/list.css">
    <title>Document</title>
</head>
<body>
    <h4>用户信息列表</h4>
    <a href="./01-add.html">添加用户信息</a>
    <table>
        <tr>
            <th>用户名</th>
            <th>昵称</th>
            <th>性别</th>
            <th>年龄</th>
            <th>电话</th>
            <th>班级</th>
            <th>头像</th>
            <th>操作</th>
        </tr>
    
        <?php  foreach ($arr as $k => $v) { ?>
            <tr>
                <td><?php echo $v['username'] ?></td>
                <td><?php echo $v['nickname'] ?></td>
                <td><?php echo $v['sex'] ?></td>
                <td><?php echo $v['age'] ?></td>
                <td><?php echo $v['tel'] ?></td>
                <td>黑马<?php echo $v['class'] ?>期</td>
                <td><img src="<?php echo $v['photo'] ?>" ></td>
                <td><a href="./03-del.php?id=<?php echo $k ?>" >删除</a></td>
            </tr>
        <?php } ?>
       <!-- http://127.0.0.1/01-form.php ? username=zs  -->

    </table>
</body>
</html>