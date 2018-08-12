<footer>
  <p>Copyright <?php echo date('Y'); ?>, <?php echo $company->name; ?></p>
  <p><?php echo $company->footer_text; ?></p>
</footer>

<?php
  db_disconnect($db);
?>