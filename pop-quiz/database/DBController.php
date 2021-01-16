<?php


class DBController
{
    // Database Connection Properties
    public $con = null;
    protected $host = 'localhost:8899';
    protected $user = 'root';
    protected $password = '';
    protected $database = "bangdia";

    // call constructor

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}

