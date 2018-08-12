<?php

class Company {
  
  public $name;
  public $address;
  public $phone;
  public $open;
  public $about;
  public $footer_text;

  protected static $db;

  public static function set_database($db) {
    self::$db = $db;
  }

  public static function find_by_sql($sql) {
    $result = self::$db->query($sql);
    if(!$result) { exit("Database query faild."); }
  
    $object_array = [];
    while($row = $result->fetch_assoc()) {
      $object_array[] = self::instatiate($row);
    }
    return $object_array;
  }

  public static function instatiate($row) {
    $object = new self;
    foreach($row as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    
    return $object;
  }

  static public function find_all() {
    $sql = "SELECT * FROM company";
    return self::find_by_sql($sql)[0];
  }

}


