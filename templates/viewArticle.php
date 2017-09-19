<?php include "templates/include/header.php" ?>
<div id="content">
      <h2 "><?php echo htmlspecialchars( $results['article']->title )?></h2><h5> Author: <?php echo htmlspecialchars( $results['article']->userName )?></h5>
      <div class="post"><h4><?php echo htmlspecialchars( $results['article']->summary )?></h4></div>
      <div class="entry"><?php echo $results['article']->content?></div>
     

      
  </div>
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>

