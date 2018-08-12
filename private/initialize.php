<?php
  ob_start(); // turn on output buffering

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("SHARED_PATH", PRIVATE_PATH . '/shared');

  require_once('db_credentials.php');
  require_once('functions.php');
  require_once('database_functions.php');
  require_once('validation_functions.php');
  require_once('statuc_and_err_functions.php');
  require_once(PROJECT_PATH . '/classes/databaseobject.class.php');
  require_once(PROJECT_PATH . '/classes/company.class.php');
  require_once(PROJECT_PATH . '/classes/bicycle.class.php');

  // Autoload class definitions
  // function my_autoload($class) {
  //   if(preg_match('/\A\w+\Z/', $class)) {
  //     include('classes/' . $class . '.class.php');
  //   }
  // }
  // spl_autoload_register('my_autoload');

  $db = db_connect();
  Company::set_database($db);
  $company = Company::find_all();
  DatabaseObject::set_database($db);
  
?>
