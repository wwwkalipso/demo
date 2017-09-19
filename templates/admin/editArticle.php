<?php include "templates/include/header.php" ?>

<div id="content">
      
      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
       
        <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>
        <input type="hidden" name="userId" value="<?php echo $_SESSION['userId']  ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="title">Article Title</label>
            <div>
            <textarea class="textedit"  name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" ><?php echo htmlspecialchars( $results['article']->title )?> </textarea>
             </div>
          </li>

          <li>
            <label for="summary">Article Summary</label>
             <div>
            <textarea class="textedit" name="summary" id="summary" placeholder="Brief description of the article" required maxlength="255" ><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
             </div>
          </li>

          <li>
            <label for="content">Article Content</label>
             <div>
            <textarea class="textedit" name="content"  placeholder="The HTML content of the article" required maxlength="1000" ><?php echo htmlspecialchars( $results['article']->content )?></textarea>
             </div>
          </li>

         


        </ul>

        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

<?php if ( $results['article']->id ) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>
</div>
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>

