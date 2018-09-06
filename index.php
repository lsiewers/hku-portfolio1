<?php include 'core/header.php'; ?>
    
<?php 
  if($_GET['link']) 
    { 
      echo '<script>console.log(' + $_GET['link'] + ');</script>';
    }
?>

<?php include 'core/footer.php'; ?>