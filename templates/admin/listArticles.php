<?php include "templates/include/header.php" ?>
<div id="content">
     


      <h1>All Articles</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

 <a href="admin.php?action=newArticle">Add a New Article</a>

<table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Title</th>
                <th>Summary</th>
               <th></th>
            </tr>
        </thead>
        <tbody>
           
                <?php foreach ( $results['articles'] as $article ) { ?>

        <tr>
          <th>

            <h5>Author: <?php echo htmlspecialchars( $article->userName )?></h5><br>
            <a href=".?action=viewArticle&amp;id=<?php echo $article->id?>"><?php echo htmlspecialchars( $article->title )?></a>
          </th>
          <th>
          <?php echo htmlspecialchars( $article->summary )?>
       </th>
       <th>
        <?php 

  if(intval($_SESSION['userId']) == $article->userId){ ?>
          <a href="admin.php?action=editArticle&amp;articleId=<?= $article->id?>">edit</a>
          <a href="admin.php?action=deleteArticle&amp;articleId=<?= $article->id ?>" onclick="return confirm('Delete This Article?')">delete</a>
          <?php }?>
       </th>
</tr>
<?php } ?>
            
       </tbody>
    </table>
  <script>
  $(function(){
    $("#example").dataTable({
      "iDisplayLength": <?=$results['countRows']?>,
      "bFilter": false,
      "lengthChange": false,
    });
  })
  </script>


  </div>   

     
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>

