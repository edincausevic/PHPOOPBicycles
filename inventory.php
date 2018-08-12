<?php require_once('private/initialize.php'); ?>
<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/main-header.php');?>

<div class="row main">

  <?php $page_active = 'inventory'; ?>
  <?php include(SHARED_PATH . '/main-menu.php'); ?>

</div> <!-- row --> 

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
  </tr>
  <?php } ?> 
</table>
</div>

<div class="row">
  <?php require_once(SHARED_PATH . '/main-footer.php'); ?>
</div>

</body>
</html>