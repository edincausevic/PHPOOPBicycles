<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Staff'; ?>
<?php $file_loc = __FILE__; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<div class="row">


<div id="main">

  <p><a href="index.php"><- Back</a></p>

  <div id="page" class="narrow">
    <h2>Add Bicycle</h2>
  </div>

  <?php
  
  if(is_post_request()) {
    
    $args = $_POST['bicycle'];

    $bicycle = new Bicycle($args);
    $result = $bicycle->add_bicycle();
    
    if($result) {

      $bicycle_id = $bicycle->id;
      $_SESSION['message'] = 'The bicycle was added successfully!';
      redirect_to('detail.php?id=' . $bicycle_id);
    }
  }else {
    $bicycle = new Bicycle();
  }
  
  ?>

  <div class="row">

  <?php echo display_errors($bicycle->errors)?>
  
  <form method="POST" action="">
  <?php require_once('form_fields.php'); ?>
  <dl>
    <button type="submit">Add Bicycle</button>
  </dl>
  </form>
  </div>

</div>

</div>


<div class="row">
<?php include(SHARED_PATH . '/staff-footer.php'); ?>
</div>