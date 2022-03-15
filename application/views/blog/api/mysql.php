<?php


class MySQL
{
    private $conn;

    function __construct($vconn)
    {
        $this->conn = $vconn;
    }

    function getMySQLInsertId()
    {
        return $this->conn->insert_id;
    }

    function getMySQLError()
    {
        return mysqli_error($this->conn);
    }



    function MySQLErrorOccurred()
    {
        return !empty(mysqli_error($this->conn));
    }


    function MySQLExecuteStatement($stmt)
    {
        $stmt->execute();
        $stmt->close();
    }

    function getMySQLResults($stmt)
    {
        $data = array();
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return $data;
    }

    function closeMySQL()
    {
        $this->conn->close();
    }
}