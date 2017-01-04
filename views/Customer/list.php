<h1>Customer List</h1>
<br/>

<?php
$customers = $data['customers'];

foreach ($customers as $customer) {
    echo $customer['id']."=>".$customer['name'];
    echo "<br/>";
}