<?php

include '/../Database/Connection.php';

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
        
    }
}

?>