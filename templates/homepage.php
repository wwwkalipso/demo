<?php include "templates/include/header.php" ?>

      <div id="content">
    



      	<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th><!--Title</th>
                <th>Summary--></th>
               
            </tr>
        </thead>
        <tbody>
           
                <?php foreach ( $results['articles'] as $article ) { ?>

        <tr>
          <th>
           <h2> <a href=".?action=viewArticle&id=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a></h2><h5> Author:  <?php echo htmlspecialchars( $article->userName )?></h5>
          <!--</th>
          <th>-->
            <div class="post">
           <p><?php echo htmlspecialchars( $article->summary )?></p>
          <div>
       </th>
</tr>
<?php } ?>
            
       </tbody>
    </table>
  <script>
  $(function(){
    $("#example").dataTable({
      iDisplayLength: <?=$results['countRows']?>,
      "bFilter": false,
      "lengthChange": false,
    });
  })
  </script>
 </div>
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>


