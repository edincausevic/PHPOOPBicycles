<?php require_once('private/initialize.php'); ?>
<?php include(SHARED_PATH . '/main-header.php');?>


<div class="row main">

  <?php include(SHARED_PATH . '/main-menu.php'); ?>

</div> <!-- row --> 

<?php 

$id = $_GET['id'];
if(!$id) { redirect_to('inventory.php'); }

$bicycle = Bicycle::find_by_id($id);  
$page_title = $bicycle->name();
?>

<div class="row">

<ul>
  <li style="margin-bottom: 20px"><a href="inventory.php">Go Back</a></li>
  <li><strong>Brand: </strong><?php echo $bicycle->brand?></li>
  <li><strong>Model: </strong><?php echo $bicycle->model?></li>
  <li><strong>Year: </strong><?php echo $bicycle->year?></li>
  <li><strong>Category: </strong><?php echo $bicycle->category?></li>
  <li><strong>Gender: </strong><?php echo $bicycle->gender?></li>
  <li><strong>Color: </strong><?php echo $bicycle->color?></li>
  <li><strong>Weight: </strong><?php echo $bicycle->weight_kg()?></li>
  <li><strong>Condition: </strong><?php echo $bicycle->condition()?></li>
  <li><strong>Price: </strong><?php echo $bicycle->price?></li>
  
</ul>

</div>

<div class="row">
  <?php require_once(SHARED_PATH . '/main-footer.php'); ?>
</div>

</body>
</html>