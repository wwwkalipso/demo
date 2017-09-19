<?php include "templates/include/header.php" ?>
<div id="content">
      <form action="admin.php?action=login" method="post" style="width: 50%;">
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        <ul>

          <li>
            <label for="username">user name</label><br>
            <input type="text" name="username" id="username" placeholder="Your user name" required autofocus maxlength="20" />
          </li>

          <li>
            <label for="password">password</label><br>
            <input type="password" name="password" id="password" placeholder="Your password" required maxlength="20" />
          </li>

        </ul>

        <div class="buttons">
          <input type="submit" name="login" value="Login" />
        </div>

      </form>
    </div>
 <?php include "templates/include/sidebar.php" ?>
<?php include "templates/include/footer.php" ?>

