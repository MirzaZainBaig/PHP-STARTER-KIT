<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'crud';
    private $conn;

    public function __construct() {
        $this->connection();
    }

    private function connection() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$this->conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }
    }

    public function updateStudent($id, $name, $address, $class, $phone) {
        $query = "UPDATE `student` SET 
                  `sname` = '{$name}', 
                  `saddress` = '{$address}', 
                  `sclass` = '{$class}', 
                  `sphone` = '{$phone}' 
                  WHERE `sid` = '{$id}'";
        $result = mysqli_query($this->conn, $query);
        if (!$result) {
            die('Query unsuccessful: ' . mysqli_error($this->conn));
        }
    }

    public function __destruct() {
        mysqli_close($this->conn);
    }
}

// Using the Database class
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['sid'];
    $student_name = $_POST['sname'];
    $student_address = $_POST['saddress'];
    $student_class = $_POST['sclass'];
    $student_phone = $_POST['sphone'];

    $db = new Database();
    $db->updateStudent($student_id, $student_name, $student_address, $student_class, $student_phone);

    header('Location: http://localhost/PHP-Starter-Kit/26-07-2024/CRUDs/index.php');
    exit;
}
?>
