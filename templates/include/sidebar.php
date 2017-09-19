<div id="sidebar">
		<ul>
			<li><a href="index.php"><h1>Blog</h1></a></li>
			<?php if(intval($_SESSION['userId']) >= 1){ ?>
				
					<li><a href="admin.php">Site Admin</a></li>
					<li>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>.<a href="admin.php?action=logout">Logout</a></li>
					<li><a href="admin.php?action=editCountRows">Edit Count Rows</a></li>
					<li><a href="admin.php?action=listUsers">List Users</a></li>
					<li><a href="admin.php?action=listArticles">List Article</a></li>
			
			<?php } else{ ?>
			
					<li>
					<a href="admin.php?action=login">Login</a>|<a href="admin.php?action=registration">Registration</a></li>
					

			<?php }?>
						</ul>
	</div>
	<!-- end sidebar -->
</div>
		
		