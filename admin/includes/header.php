<?php include '../database/Database.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Post</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="../viewBlog.php">Home</a>
		  <a class="blog-nav-item" href="includes/logout.php">Logout</a>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 blog-main">
		<?php if(isset($_GET['msg'])) : ?>
			<div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>
		<?php endif; ?>