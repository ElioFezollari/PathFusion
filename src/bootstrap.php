<?php
// defning the constant APP_ROOT as the parent directory of the current file (two levels up)
define('APP_ROOT', dirname(__DIR__));

// autoloading
spl_autoload_register(function ($className) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = APP_ROOT . '/src/classes/' . $classPath . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});



// db connection details
$dsn = "mysql:host=localhost;port=3307;dbname=project;charset=utf8mb4";
$username = "root";
$password = "";

// creating a cms instance and passing the database connection details
$cms = new CMS($dsn, $username, $password);

// unset the database connection details to clear sensitive information
unset($dsn, $username, $password);
?>