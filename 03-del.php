<?php 
    //echo 'del!';
    //前端要把删除数据 id 发给后台
    //负责删除数据？ 我删谁？
    // echo '<pre>';
    // print_r($_GET);
    // echo '</pre>';

    //获取前端传递过来索引值，根据索引值从数组中删除指定索引的这个数据
    $id = $_GET['id'];
    echo $id;
    //1-获取data.txt中json字符串
    $str = file_get_contents('data.txt');
    //2-把字符串转成数组
    $arr = json_decode($str, true);
    //3-从数组中删除对应索引的元素
    // arr.splice(index,length);
    //array_splice(被删除的数组，起始索引， 删几个);
    array_splice($arr, $id, 1);
    //4-把数组在转回字符串
    $str = json_encode($arr);
    //5-把字符串存回到data.txt中
    file_put_contents('data.txt', $str);


    //跳转到列表页，看到被删除效果
    //header('location:02-list.php');
?>