<?php

class Bicycle extends DatabaseObject {

  protected static $table_name = 'bicycles';
  protected static $db_columns = ['id', 'brand', 'model', 'year', 'category', 'color', 'description', 'gender', 'price', 'weight_kg', 'condition_id'];

  public $id;
  public $brand;
  public $model;
  public $year;
  public $category;
  public $color;
  public $description;
  public $gender;
  public $price;
  public $weight_kg;
  public $condition_id;

  public static $CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];
  public static $GENDERS = ['Mens', 'Womens', 'Unisex'];
  public static $CONDITION_OPTIONS = [
    1 => 'Beat up',
    2 => 'Decent',
    3 => 'Good',
    4 => 'Great',
    5 => 'Like New'
  ];

  public $errors = [];

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->brand = $args['brand'] ?? '';
    $this->model = $args['model'] ?? '';
    $this->year = $args['year'] ?? '';
    $this->category = $args['category'] ?? '';
    $this->color = $args['color'] ?? '';
    $this->description = $args['description'] ?? '';
    $this->gender = $args['gender'] ?? '';
    $this->price = $args['price'] ?? 0;
    $this->weight_kg = $args['weight_kg'] ?? 0.0;
    $this->condition_id = $args['condition_id'] ?? 3;

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }

  public function name() {
    return "{$this->brand} {$this->model} {$this->year}";
  }

  public function weight_kg() {
    return number_format($this->weight_kg, 2);
  }

  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
    return number_format($weight_lbs, 2) . ' lbs';
  }

  public function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

  public function condition() {
    if($this->condition_id > 0) {
      return self::$CONDITION_OPTIONS[$this->condition_id];
    } else {
      return "Unknown";
    }
  }

  protected function validate() {
    $this->errors = [];

    if(is_blank($this->brand)) { $this->errors[] = 'Brand cannot be balnk.'; }
    elseif(has_length_greater_than($this->brand, 50)) { $this->errors[] = 'Brand name is to long.'; }
    elseif(has_length_less_than($this->brand, 3)) { $this->errors[] = 'Brand name is to short.'; }

    if(is_blank($this->year)) { $this->errors[] = 'Year cannot be balnk.'; }
    if(is_blank($this->category)) { $this->errors[] = 'Category cannot be balnk.'; }
    if(is_blank($this->color)) { $this->errors[] = 'Color cannot be balnk.'; }
    if(is_blank($this->gender)) { $this->errors[] = 'Gender cannot be balnk.'; }

    return $this->errors;
  }
}