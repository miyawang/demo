<?php 
    //封装目的：提供代码复用性
    //如何封装： 先提前代码中公共部分，把变化地方暴露成参数

    //常量：
    define('HOST', '127.0.0.1');
    define('UNAME', 'root');
    define('PWD', 'root');
    define('DB', 'z_stumanage');

    header('content-type:text/html;charset=utf-8');
    //封装以执行增删改（非查询语句）的方法
    //参数 要执行sql语句
    //如果执行成功 返回 true  失败 返回false 
    function my_exec($sql) {
        //1-连接数据库
        $link = @mysqli_connect(HOST, UNAME, PWD, DB);
        //判断是否连接成功
        if (!$link) {
            echo '数据库连接失败！';
            return false; //返回false 
        }

        //2-执行sql语句 并分析结果
        if(!mysqli_query($link, $sql)){
            echo '操作失败！';
            //关闭连接
            mysqli_close($link);
            return false;
        }

        //关闭连接
        mysqli_close($link);
        //成功
        return  true;    
    }


    // $sql = "delete from stu where id = 16";
    // var_dump( my_exec($sql) );

    //封装一个执行查询语句方法
    //参数 要执行sql
    //返回值： 成功： 查询到数据  二维数组
    //         失败： false;
    function my_query($sql) {
        //1-连接数据库
        $link = @mysqli_connect(HOST, UNAME, PWD, DB);
        //判断是否连接成功
        if (!$link) {
            echo '数据库连接失败！';
            return false; //返回false 
        }
        //执行sql语句  失败返回false 成功返回 结果集 
        $res = mysqli_query($link, $sql);

        //如果没有数据到此结束
        if(!$res || mysqli_num_rows($res) == 0 ) {
            echo '未获取到数据';
            mysqli_close($link);
            return false;
        }
        //有数据就保存数据

        while( $row = mysqli_fetch_assoc($res) ) {
            $data[] = $row;
        }
        mysqli_close($link);//关闭连接
        return $data; //返回二维数组
    }   

    $sql = "select * from stu1";
    //看到bool类型原始值 用var_dump()
    // var_dump( my_query($sql));

    // echo '<pre>';
    // print_r(my_query($sql));
    // echo '</pre>';
    
    


?>