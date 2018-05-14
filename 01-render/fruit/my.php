<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">    
</head>
<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="#">水果</a>
            <a href="#">干果</a>
            <a href="#">蔬菜</a>
        </p>
        <!-- 展示水果容器 -->
        <!-- 根据数据库数据动态生成水果信息 -->
        <!-- 引入水果的数据 -->
        <?php  include './fruit.php' ?>
        <ul>
            <!-- 遍历arr数组 -->
            <?php foreach($arr as $k => $v ) { ?>
                <li>
                    <img src=" <?php echo $v['path'] ?> " alt="">
                    <a href=""> <?php echo $v['name'] ?> </a>
                </li>
            <?php } ?>

        </ul>

    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>