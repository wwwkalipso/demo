<?php include "templates/include/header.php" ?>

      <div id="content">

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
       

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <div>
            <label for="title">Count Rows </label>
            <input type="number" name="countRows" id="countRows" placeholder="Count rows" required autofocus  value="<?php echo htmlspecialchars( $results['countRows'] )?>" />
         
        </div>
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>

      </form>

</div>
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>