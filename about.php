<?php require_once('private/initialize.php'); ?>
<?php $page_title = 'About'; ?>
<?php include(SHARED_PATH . '/main-header.php'); ?>

<div class="row">


<div id="main">

  <?php $page_active = 'about'; ?>
  <?php include(SHARED_PATH . '/main-menu.php'); ?>

  <div id="page" class="narrow">
    <h2>About Us</h2>
    <p><?php echo $company->about; ?></p>

  </div>

</div>

</div>

<img src="img/AdobeStock_50633008_xlarge.jpg" width="100%" alt="Super Hero Image">

<div class="row">
<?php include(SHARED_PATH . '/main-footer.php'); ?>
</div>
