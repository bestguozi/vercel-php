<?php
// 1. 创建数据库连接
$host = 'localhost'; // 数据库服务器地址，默认为本地主机
$dbname = 'any'; // 数据库名称
$user = 'root'; // 数据库用户名
$password = '123456'; // 数据库密码

try {
    // 使用PDO构造函数创建数据库连接对象
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    // 设置错误模式为异常
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 成功连接后可以在这里执行SQL语句，例如创建数据表
     $pdo->exec("CREATE TABLE IF NOT EXISTS test (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(255) NOT NULL
     )");

} catch (PDOException $e) {
    // 如果连接失败，输出错误信息
    echo "Connection failed: " . $e->getMessage();
}

// 在这里执行其他数据库操作...
?>

<?php
