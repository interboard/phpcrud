<?php
class sqlconfig
{
    private $_host = 'localhost';
    private $_username = 'interboard';
    private $_password = 'fts776sut';
    private $_database = 'interboard';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$this->connection) {
                echo '無法連資料庫';
                exit;
            }
        }

        return $this->connection;
    }
}
?>
