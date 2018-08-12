<dl>
      <dt>Brand *</dt>
      <dd><input type="text" name="bicycle[brand]" value="<?php echo $bicycle->brand; ?>" /></dd>
    </dl>
    <dl>
      <dt>Model</dt>
      <dd><input type="text" name="bicycle[model]" value="<?php echo $bicycle->model; ?>" /></dd>
    </dl>
    <dl>
      <dt>Year *</dt>
      <dd>
        <select name="bicycle[year]">
          <?php $this_year = idate('Y'); ?>
          <option value="" selected></option>
          <?php for($year = $this_year-20; $year <= $this_year; $year++) { ?>
          <option value="<?php echo $year; ?>" <?php if($bicycle->year == $year) {echo 'selected'; }?>><?php echo $year; ?></option>
          <?php } ?>
        </select>
      </dd>
    </dl>
    <dl>
      <dt>Category *</dt>
      <dd>
        <select name="bicycle[category]">
          <option value="" selected></option>
          <?php foreach(Bicycle::$CATEGORIES as $category) {?>
          <option value="<?php echo $category; ?>" <?php if($bicycle->category == $category) {echo 'selected'; }?>><?php echo $category; ?></option>
          <?php }?>
        </select>
      </dd>
    </dl>
    <dl>
      <dt>Gender *</dt>
      <dd>
        <select name="bicycle[gender]">
          <option value="" selected></option>
          <?php foreach(Bicycle::$GENDERS as $gender) {?>
          <option value="<?php echo $gender; ?>" <?php if($bicycle->gender == $gender) {echo 'selected'; }?>><?php echo $gender; ?></option>
          <?php }?>
        </select>
      </dd>
    </dl>
    <dl>
      <dt>Color *</dt>
      <dd><input type="text" name="bicycle[color]"  value="<?php echo $bicycle->color; ?>"/></dd>
    </dl>
    <dl>
      <dt>Condition</dt>
      <dd>
        <select name="bicycle[condition_id]">
          <option value="" selected></option>
          <?php foreach(Bicycle::$CONDITION_OPTIONS as $condition_id => $value) {?>
          <option value="<?php echo $condition_id; ?>" <?php if($bicycle->condition_id == $condition_id) {echo 'selected'; }?>><?php echo $value; ?></option>
          <?php }?>
        </select>
      </dd>
    </dl>
    <dl>
      <dt>Weight (kg)</dt>
      <dd><input type="text" name="bicycle[weight_kg]" value="<?php echo $bicycle->weight_kg(); ?>"/></dd>
    </dl>
    <dl>
      <dt>Price ($)</dt>
      <dd><input type="text" name="bicycle[price]" value="<?php echo $bicycle->price; ?>" /></dd>
    </dl>
    <dl>
      <dt>Description</dt>
      <dd><textarea name="bicycle[description]" id="" cols="30" rows="10"
              value="<?php echo $bicycle->description; ?>"></textarea></dd>
    </dl>
    