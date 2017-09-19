<?php include "templates/include/header.php" ?>

      <div id="content">

      <h1>All Articles</h1>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if ( isset( $results['statusMessage'] ) ) { ?>
        <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

 

<table id="tableUser" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Email</th>
                
               
            </tr>
        </thead>
        <tbody>
           
                <?php foreach ( $results['users'] as $user ) { ?>

        <tr>
          <th>
            <a href=".?action=viewUser&amp;id=<?php echo $user->userId?>"><?php echo htmlspecialchars( $user->userName )?></a>
          </th>
          <th>
          <?php echo htmlspecialchars( $user->surname )?>
       </th>
        <th>
             <?php echo htmlspecialchars( $user->phone )?>
          </th>
          <th>
          <?php echo htmlspecialchars( $user->email )?>
       </th>
       
         
</tr>
<?php } ?>
            
       </tbody>
    </table>
  <script>
  $(function(){
    $("#tableUser").dataTable({
      "iDisplayLength": <?=$results['countRows']?>,
      "bFilter": false,
      "lengthChange": false,
    });
  })
  </script>
</div>
   <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>

