<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./nav-style.css">
</head>
<body>
    <?php 
        //模拟数据中中导航数据
        $navs = ['新闻', '知道',  '贴吧', '文库', '百科','地图'];
    ?>
    <!--  导航条数据根据后台数据库中导航数据动态生成 -->
    <ul>
        <!-- 根据数据库的数据动态生成导航 -->
        <?php 
            foreach($navs as $k => $v ){
                echo '<li>' . $v . '</li>';
            }
        ?>
    </ul>



    <?php $navs = ['news','knows','tieba','wenku','baike','map'];?>
    <ul>
        <?php 
            foreach($navs as $k => $v){
                echo '<li>' . $v . '</li>';
            }
        ?>

        <?php 
            foreach($navs as $k => $v){
                echo '<li>' . $v . '</li>';
            }
        ?>
    </ul>
</body>
</html>