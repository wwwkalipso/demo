<?php include "templates/include/header.php" ?>


      <div id="content">

      <h1><?php echo $results['pageTitle']?></h1>

      <form action="admin.php?action=<?php echo $results['formAction']?>" method="post">
        <input type="hidden" name="userId" value="<?php echo $results['user']->id ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

           <li>
            <label for="userName">user name</label>
            <div>
            <input type="text" name="userName" id="username" placeholder="Your username" required autofocus maxlength="20" />
             </div>
          </li>
          <li>
            <label for="surname">surname</label>
             <div>
            <input type="text" name="surname" id="surname" placeholder="Your surname" required  maxlength="20" />
             </div>
          </li>
          <li>
            <label for="phone">phone</label>
             <div>
            +380<input type="number" name="phone" id="phone" placeholder="Your phone" required  maxlength="7" />
             </div>
          </li>
          <li>
            <label for="email">email</label>
             <div>
            <input type="email" name="email" id="email" placeholder="Your email" required  maxlength="20" />
             </div>
          </li>
          <li>
            <label for="password">password</label>
             <div>
            <input type="password" name="password" id="password" placeholder="Your  password" required maxlength="20" />
             </div>
          </li>
        
         

         


        </ul>

        <div class="buttons">
          <input type="submit" id="saveChanges" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
       
      </form>

<?php if ( $results['user']->id ) { ?>
      <p><a href="admin.php?action=deleteUser&amp;userId=<?php echo $results['user']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>
 <script>
$(document).ready(function() {
    $("#username").bind("focusout", function() {
        var name = $(this).val();
        
    console.log(name);
        var msg = jQuery('#comment').val();
   
        $.ajax({
            url: "name.php",
            type: "POST",
            data: { name:name}, // Передаем ID нашей статьи
            dataType: "json",
            success: function(result) {
                if (!result.error){
                  console.log(result); 
                }else{
          console.log('error');
          $('#username').val("");
                    alert(result.message);
                }
            }
        });
  return false;
    });
});
</script>
</div>
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>

