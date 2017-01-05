<?php

include 'src/Model/Query/CustomerModel.php';

class CustomerController
{
    private $customerModel;

    public function __construct()
    {
        $this->customerModel = new CustomerModel();
    }


    public function addAction()
    {
        if (isset($_POST['submit'])) {
            $this->customerModel->insert($_POST, $_FILES);
        }

        include 'views/Customer/add.php';
    }

    public function editAction($id)
    {

        echo "you are in edit action";
        // you get id here so you can get row data of that id from table

        include 'views/Customer/edit.php';
    }

    public function listAction()
    {
        $customers = $this->customerModel->findAll();

        $data = [
            'customers' => $customers
        ];

        include 'views/Customer/list.php';
    }
}

?>
