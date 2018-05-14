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


        <ul>
            <!-- 1-引入水果的数据 -->
            <?php  include_once './fruit.php' ?>
            <!--  网站中水果数据 有数据的数据动态生成 
                2-遍历水果数据二维数组，动态生成li标签                
            -->
            <?php foreach($arr as $k=>$v) { ?>
                <li>
                    <img src="<?php echo $v['path'] ?>" alt="">
                    <a href="#"><?php echo $v['name'] ?></a>
                </li>  
            <?php } ?>





            <?php include_once './fruit.php' ?>
            <?php foreach($arr as $k=>$v){?>
            <li>
                <img src="<?php echo $v['path'] ?>" alt="">
                <a href="#"><?php echo $v['name'] ?></a>
            </li>
            <?php } ?>
            

            <?php include_once './fruit.php' ?>
            <?php foreach($arr as $k => $v){ ?>
            <li>
                <img src="<?php echo $v['path'] ?>" alt="">
                <a href="#"><?php echo $v['name']?></a>
            </li>
           <?php } ?>
        </ul>

        

    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>
</html>