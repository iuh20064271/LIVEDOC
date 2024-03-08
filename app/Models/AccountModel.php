<?php

class AccountModel extends Database
{
    private $connect;

    public function __construct()
    {
        $p = new Database();
        $this->connect =  $p->connect();
    }

    public function getListFromTowTables($tableName1, $tableName2, $columnName1, $columnName2, )
    {
        $query = "SELECT * FROM $tableName1 INNER JOIN $tableName2 ON $tableName1.$columnName1 = $tableName2.$columnName2";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function getListTable($tableName, $condition = '')
    {
        $query = "SELECT * FROM $tableName $condition";
        $result = mysqli_query($this->connect, $query);
        $data = array();
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function InsertData($tableName, $data)
    {
        $columns = implode(", ", array_keys($data));
        $values = implode("', '", array_values($data));
        $insert = "INSERT INTO `$tableName` ($columns) VALUES('$values');";
        $kq = mysqli_query($this->connect, $insert);
        return $kq;
    }
}