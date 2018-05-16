<?php 
    
    //获取前端提交的数据 和 图片 
    //把数据存储到数据库(data.txt)中

    //注意点：
    //一个人信息用一维数组存储
    //一个班的信息用二维数组存储
    //添加学生信息 ， 就是向二维数组中追加一个一维数组
    //删除学生信息 ， 就是从二维数组中删除一个一维数组
    //数组就是变量 ，页面关闭数据销毁， 要把数据存到data.txt中， 为了持久化

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    
    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';


    //1-用一维数组来存储这个人的信息
    $info = $_POST;
    //2-将文件的保存到upload文件夹中，把文件在服务器中地址，存放到数据库中
    $photo = $_FILES['photo'];
    if ($photo['error'] === 0) {
        $ftmp = $photo['tmp_name']; //临时文件路径
        $ext = strrchr( $photo['name'], '.' ); //截取后缀名
        $newName = './upload/'. time() . rand(1000, 9999) . $ext; //新文件路径
        //转移文件
        move_uploaded_file($ftmp, $newName);
        //把新文件路径添加到info中
        $info['photo'] = $newName;
    }

    // echo '<pre>';
    // print_r($info);
    // echo '</pre>';

    //把个人信息添加到数据库中
    //info数组添加到data.txt中数组中
    //1-先把data.txt中空数组取出(json是字符串)
    $str = file_get_contents('data.txt');
   
    //2-把json字符串转成数组
    $arr = json_decode($str, true);

    //3-把info添加到数组中
    $arr[] = $info;

    //4-在将数组转成json字符串
    $str = json_encode($arr);
 
    //5-把json字符串存储data.txt中
    file_put_contents('data.txt', $str);
    

    //跳转到列表页
    //header('location:02-list.php');

?>