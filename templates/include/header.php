<!--<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
   <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
  </head>
  <body>
    <div id="container">
    	<div class="admin_heder">
<?php 

	if(intval($_SESSION['userId']) >= 1){ ?>
		
		<a href="admin.php">Site Admin</a>
		<p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>.<a href="admin.php?action=logout">Logout</a>
			<p><a href="admin.php?action=editCountRows">Edit Count Rows</a></p>
			<p><a href="admin.php?action=listUsers">List Users</a></p>
			<p><a href="admin.php?action=listArticles">List Article</a></p>


	<?php } else{ ?>
		<a href="admin.php?action=login">Login</a>|<a href="admin.php?action=registration">Registration</a>
	<?php }?>
</div>-->


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
   <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
  </head>
<body>
<!-- start header -->
<div id="header">
	<a href="index.php"><h1>Blog</h1></a>
</div>
<!-- end header -->
<!-- start page -->
<div id="page">     

