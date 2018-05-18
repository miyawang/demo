<?php 
    //获取数据库中所有数据，动态遍历 渲染在页面中
    //1-引入操作数据库工具函数
    include_once './fn.php';
    //2-准备sql语句
    $sql = "select * from stu";
    //3-执行
    $data = my_query($sql); //二维数组
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
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
    <a href="./01-add.html">添加信息</a>
    <table>
        <tr>
            <th>用户名</th>
            <th>昵称</th>
            <th>性别</th>
            <th>年龄</th>
            <th>电话</th>           
            <th>头像</th>
            <th>操作</th>
        </tr>
        <!-- 遍历生成每一行 -->
        <!-- 先去掉班级 -->
        <?php foreach($data as $k => $v) {  ?>
            <tr>
                <td><?php echo $v['name'] ?></td>
                <td><?php echo $v['nickname'] ?></td>
                <td><?php echo $v['sex']=='m'?'男':'女' ?></td>
                <td><?php echo $v['age'] ?></td>
                <td><?php echo $v['tel'] ?></td>
                <td><img src="<?php echo $v['photo'] ?>" ></td>
                <td>
                    <a href="./03-del.php?id=<?php echo $v['id'] ?>">删除</a>
                    <a href="./04-detail.php?id=<?php echo $v['id'] ?>">详情</a>
                    <a href="#">修改</a>
                </td>
            </tr>
        <?php } ?>
 

    </table>
</body>
</html>