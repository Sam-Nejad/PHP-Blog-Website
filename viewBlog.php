<?php
    include 'includes/header.php'; ?>
<?php
	$db = new Database();
	$query = "SELECT * FROM posts ORDER BY id DESC";
	$posts = $db->select($query);
	$query = "SELECT * FROM months";
	$months = $db->select($query);
?>
<?php if($posts) : ?>
	<?php while($row = $posts->fetch_assoc()) : ?>
		<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?></p>
				<?php echo shortenText($row['body']); ?>
          </div>
	<?php endwhile; ?>
<?php else : ?>
	<p>There are no posts yet</p>
<?php endif; ?>		  
<?php include 'includes/footer.php'; ?>
