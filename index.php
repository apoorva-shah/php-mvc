<?php

// index.php

// load and initialize any global libraries
require_once 'src/Controller/CustomerController.php';


// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri;
if ('/php-mvc/index.php' === $uri) {

} elseif ('/php-mvc/index.php/customer/list' === $uri) {
    $customerController = new CustomerController();
    $customerController->listAction();
} elseif ('/php-mvc/index.php/customer/add' === $uri) {
    $customerController = new CustomerController();
    $customerController->addAction();
} elseif ('/php-mvc/index.php/customer/edit' === $uri && $_GET['id']) {
    $customerController = new CustomerController();
    $customerController->editAction($_GET['id']);
} else {
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Some issue in code page not found</h1></body></html>';
}