<?php
//根据自己的数据库账号密码等信息修改值
class connDB {
    private $conn;
    private $host;      //数据库服务器主机名
    private $user;      //数据库用户名
    private $password;  //数据库密码
    private $database;  //数据库名
    private $port;      //数据库端口号
    private $code;      //编码格式
    function __construct($host,$user,$password,$database,$port,$code) {     //构造方法
        $this->host = $host;
        $this->user = $user;
        $this->database = $database;
        $this->password = $password;
        $this->port = $port;
        $this->code = $code;
    }
    function connect() {
        $this->conn = mysqli_connect("$this->host","$this->user","$this->password","$this->database","$this->port") or die("连接数据失败！".mysqli_error());
        mysqli_query($this->conn,"set names $this->code");
        return $this->conn;
    }
}
?>

//如果某页面需要连接数据库，请在使用前添加一下代码：
//include('conn/conn.php');

