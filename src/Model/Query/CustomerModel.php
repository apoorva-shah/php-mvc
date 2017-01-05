<?php

include 'src/Model/Database/Connection.php';

class CustomerModel extends Connection
{
    public function findAll()
    {
        $sql = 'SELECT * from customer';

        $result = $this->getConn()
                ->query($sql)
        ;
        $rows = [];

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function insert($data)
    {
        $conn = $this->getConn();
        $name = $this->escapeString($conn, $data['name']);

        $sql = "INSERT INTO customer (name) VALUES ('$name')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    private function  escapeString($conn, $string)
    {
        return mysqli_escape_string($conn, $string);
    }
}

?>