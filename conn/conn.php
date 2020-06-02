<?php
class connDB {
    private $conn;
    private $host;      //数据库服务器主机名
    private $user;      //数据库用户名
    private $password;  //数据库密码
    private $database;  //数据库名
    private $port;      //数据库端口号
    private $code;      //编码格式

    private $sqlType;   //sql语句类型
    private $rs;        //查询结果

    function __construct($host,$user,$password,$database,$port,$code) {     //构造函数
        $this->host = $host;
        $this->user = $user;
        $this->database = $database;
        $this->password = $password;
        $this->port = $port;
        $this->code = $code;
    }

    function getConnect() {                //数据库连接方法
        $this->conn = mysqli_connect("$this->host","$this->user","$this->password","$this->database","$this->port") or die("连接数据失败！".mysqli_error());
        mysqli_query($this->conn,"set names $this->code");
        return $this->conn;
    }

    function useSQL($sql) {       //数据库查询方法
        $this->sqlType = strtolower(substr(trim($sql),0,6));
        $this->rs = mysqli_query($this->conn,$sql);
        if($this->sqlType == "select") {
            while($array=mysqli_fetch_array($this->rs)) {
                $arrayData[] = $array;
            }
            if(count($arrayData) == 0 || $this->rs == false) {
                return false;
            } else {
                return $arrayData;
            }
        } elseif ($this->sqlType == 'insert' || $this->sqlType == 'update' || $this->sqlType == 'delete') {
            return $this->rs;
        } else {
            return false;
        }
    }
}
?>


