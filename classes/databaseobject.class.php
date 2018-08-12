<?php

class DatabaseObject {

  protected static $db;
  protected static $table_name = '';
  protected static $columns = '';

  public static function set_database($db) {
    self::$db = $db;
  }

  public function find_by_sql($sql) {
    $result = self::$db->query($sql);
    if(!$result) { exit("Database query failde!"); }
    
    $object_array = [];
    while($row = $result->fetch_assoc()) {
      $object_array[] = static::instatiate($row);
    }
    return $object_array;
  }

  protected static function instatiate($row) {
    $object = new static;
    foreach($row as $property => $value) {
      if(property_exists($object, $property)) {
        $object->$property = $value;
      }
    }
    return $object;
  }

  static public function find_all() {
    $sql = "SELECT * FROM " . static::$table_name . " ORDER BY id DESC";
    return static::find_by_sql($sql);
  }

  static public function find_by_id($id) {
    $sql = "SELECT * FROM " . static::$table_name . " WHERE id=" . self::$db->escape_string($id);
    $obj_array = static::find_by_sql($sql);
    if (!empty($obj_array)) {
      return array_shift($obj_array);
    }else { return false; }
  }

  public function add_bicycle() {
    $this->validate();
    if(!empty($this->errors)) { return false; }

    $props = $this->propertys();
    $sql = "INSERT INTO " . static::$table_name . " ";
    $sql .= "(" . join(', ', array_keys($props)) .") ";
    $sql .= "VALUES ";
    $sql .= "('" . join("', '", array_values($props)) ."') ";

    $result = self::$db->query($sql);
    if ($result) {
      $this->id = self::$db->insert_id;
    }
    return $result; 
  }

  public function edit_bicycle($id) {
    $this->validate();
    if(!empty($this->errors)) { return false; }

    $props = $this->propertys();
    $updateKeyVal = '';
    $len = count($props);
    $i = 0;
    foreach($props as $prop => $value) {
      $i++;
      if($i == $len) { $updateKeyVal .= $prop . '="' . $value . '" '; break; }
      $updateKeyVal .= $prop . '="' . $value . '", ';
    }

    $sql = "UPDATE " . static::$table_name . " SET " . $updateKeyVal . " WHERE id=" . $id;
    $result = self::$db->query($sql);
    if ($result) {
      $this->id = self::$db->insert_id;
    }
    return $result; 
  }

  public function removeBike($id) {
    $sql = "DELETE FROM " . static::$table_name . " WHERE id=" . self::$db->escape_string($id) . " LIMIT 1";
    $result = self::$db->query($sql);
    return $result; 
  }

  public function propertys() {
    $props = [];
    foreach(static::$db_columns as $column) {
      if($column == 'id') { continue; }
      $props[$column] = self::$db->escape_string($this->$column);
    }
    return $props;
  }

  
}