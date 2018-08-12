<?php require_once('../../private/initialize.php'); ?>
<?php $page_title = 'Staff'; ?>
<?php $file_loc = __FILE__; ?>
<?php include(SHARED_PATH . '/staff-header.php'); ?>

<div class="row">


<div id="main">

  <p><a href="../index.php"><- Home</a></p>

  <div id="page" class="narrow">
    <h2>Bicycles</h2>
    <p><a href="new.php">Add Bicycle</a></p>
  </div>

  <div class="row">
  
  <table style="width:100%">
    <tr>
      <th>Brand</th>
      <th>Model</th>
      <th>Year</th>
      <th>Category</th>
      <th>Gender</th>
      <th>Color</th>
      <th>Weight</th>
      <th>Condition</th>
      <th>Price</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
  
    <?php $bikes = Bicycle::find_all(); ?>
    <?php foreach($bikes as $bike) { ?>
    <tr>
      <td><?php echo $bike->brand; ?></td>
      <td><?php echo $bike->model; ?></td>
      <td><?php echo $bike->year; ?></td>
      <td><?php echo $bike->category; ?></td>
      <td><?php echo $bike->gender; ?></td>
      <td><?php echo $bike->color; ?></td>
      <td><?php echo $bike->weight_kg(); ?></td>
      <td><?php echo $bike->condition(); ?></td>
      <td><?php echo $bike->price; ?></td>
      <td><a href="detail.php?id=<?php echo $bike->id; ?>">View</a></td>
      <td><a href="edit.php?id=<?php echo $bike->id; ?>">Edit</a></td>
      <td><a href="javascript:;" onclick="del(<?php echo $bike->id?>)">Delete</a></td>
    </tr>
    <?php } ?> 
  </table>
  </div>

</div>

</div>

<script>
  function del(id) {
    if(confirm('Are you sure you what to remove this bike?')) {
      window.location = 'delete.php?id=' + id;
    }
  }
</script>

<div class="row">
<?php include(SHARED_PATH . '/staff-footer.php'); ?>
</div>