<?php
echo "Hello World";
$conn = mysqli_connect('mysql','root','1234561');
if($conn){
    echo '数据库连接成功！';
}else{
    echo '数据库连接失败！';
}
phpinfo();
?>