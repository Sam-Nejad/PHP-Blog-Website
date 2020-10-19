<?php include 'database/Database.php'; ?>
<?php
session_start();
function formatDate($date){
    date_default_timezone_set("UTC");
    return date('jS F Y, G:i e',strtotime($date));
}
function shortenText($text, $chars = 450){
    $text = $text." ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text,' '));
    return $text;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <?php
            if (isset($_SESSION['userId'])) {
                echo '<a class="blog-nav-item" href="login.php">Add Post</a>';
                echo '<a class="blog-nav-item" href="includes/logout.php">Logout</a>';
            }
            else {
                echo '<a class="blog-nav-item" href="login.php">Login</a>';
            }
            ?>
        </nav>
      </div>
    </div>
    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title">WELCOME TO MY BLOG</h1>
      </div>
      <div class="row">
        <div class="col-sm-8 blog-main">