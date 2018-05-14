<?php 
    //1-php代码必须放在php标签内部,服务器中php执行程序只会执行php标签内部代码
    //2-写在php标签外面的代码直接被忽略，
    //3-在php程序执行完成后，会把php的执行结果和代码块外面代码一起返回给浏览器，浏览器进行解析
    header('content-type:text/html;charset=utf-8');
    echo '菊花茶, 满地伤！';
    echo 2 + 10;
?>

echo 'hello test!';
echo 3 +  6;
<h1>我是标题</h1>