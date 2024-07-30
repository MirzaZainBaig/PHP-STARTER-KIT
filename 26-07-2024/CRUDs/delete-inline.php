<?php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'crud';
    private $connection;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die('Connection failed: ' . $this->connection->connect_error);
        }
    }

    public function deleteStudent($student_id) {
        $query = "DELETE FROM student WHERE sid = ?";
        $stmt = $this->connection->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . $this->connection->error);
        }
        $stmt->bind_param('i', $student_id);
        $stmt->execute();

        if ($stmt->error) {
            die('Query unsuccessful: ' . $stmt->error);
        }

        $stmt->close();
    }

    public function close() {
        $this->connection->close();
    }
}

if (isset($_GET['id'])) {
    $student_id = $_GET['id'];
    $db = new Database();
    $db->deleteStudent($student_id);
    $db->close();
    header('Location: http://localhost/PHP-Starter-Kit/26-07-2024/CRUDs/index.php');
    exit;
}
?>
