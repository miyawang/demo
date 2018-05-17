<?php 
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';

    // [username] => baby
    // [nickname] => 铔嬭泲
    // [age] => 22
    // [tel] => 12312312323
    // [sex] => m
    // [class] => 4
    // 引入操作数据工具函数
    // include_once './fn.php';

    // //1-接收前端传递数
    // $username = $_POST['username'];
    // $nickname = $_POST['nickname'];
    // $age = $_POST['age'];
    // $tel = $_POST['tel'];
    // $sex = $_POST['sex'];
    // $class = $_POST['class'];
    // $photo = '';

    // //2-保存上传图像
    // $file = $_FILES['photo'];
    // //如果图片上传成功则保存图片
    // if ($file['error'] === 0) {
    //     $ftmp = $file['tmp_name'];//临时文件路径
    //     $ext = strrchr($file['name'], '.');
    //     $newName = './uploads/'. time() .rand(1000, 9999) . $ext;
    //     //转移
    //     move_uploaded_file($ftmp, $newName);
    //     $photo  = $newName; //保存图片在服务器中存储地址
    // }
    // // 13277948971 
    // //3-把添加学生信息和图片地址 存放数据库中
    // //准备添加数据sql语句
    // $sql = "insert into stu (name, nickname, age, tel, sex, photo , classid) 
    //         values ('$username', '$nickname', $age, '$tel', '$sex', '$photo', $class)";

    // echo $sql;

    // my_exec($sql); //执行sql语句

    // //跳转到列表页
    // header('location:02-list.php');


    // include_once './fn.php'; // 引入工具函数
    // $username = $_POST['username'];
    // $nickname = $_POST['nikename'];
    // $age = $_POST['age'];
    // $tel = $_POST['tel'];
    // $sex = $_POST['sex'];
    // $class = $_POST['class'];
    // $photo = '';
    // //$_GET $_POST $_FILES是PHP系统提供的超全局变量，是一个数组，里面存放了表单通过get方式提交的数据。
    // $file = $_FILES['photo']; //二维数组

    // if($file['error'] === 0){
    //     $ftmp = $file['tmp_name'];
    //     $ext = strrchr($file['name'],'.');
    //     $newName = './uploads/' .time().rand(1000,9999).$ext;
    //     move_uploaded_file($ftmp,$newName);
    //     // move_uploaded_file($path, $newPath);可以保存临时图片
    //     $photo = $newName;
    // }
    // $sql = "insert into stu (name,nickname,age,tel,sex,photo,classid)
    //         values ('$username','$nickname',$age,'$tel','$sex','$photo',class)";
    // echo $sql;
    // my_exec($sql); //执行
    // header('location:02-list.php'); //跳转
    
    

    include_once './fn.php';
    $username = $_POST['username'];
    $nickname = $_POST['nikename'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    $sex = $_POST['sex'];
    $class = $_POST['class'];
    $photo = '';

    $file = $_FILES['photo'];
    if($file['error'] ===0){
        $ftmp = $file['tmp_name'];
        $ext = strrchr($file['name'],'.');//从右往左
        $newName = './uploads/'.time().rand(1000,9999).$ext;
        move_uploaded_file($ftmp,$newName);
        $photo = $newName;
    }
    $sql = "insert into stu (name,nickname,age,tel,sex,photo,classid)
    values('$username','$nickname','$age','$tel','$sex','$photo','$class')";
    echo $sql;
    my_exec($sql);
    header('location:02-list.php');




    

?>