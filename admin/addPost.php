<?php include 'includes/header.php'; ?>
<?php
	$db = new Database();
	if(isset($_POST['submit'])){
		$title = mysqli_real_escape_string($db->link, $_POST['title']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$month = mysqli_real_escape_string($db->link, $_POST['month']);
			$query = "INSERT INTO posts
					  (title, body, month) 
				VALUES('$title', '$body', '$month')";
			$insert_row = $db->insert($query);

	}
?>
<?php
	$query = "SELECT * FROM months";
	$months = $db->select($query);
?>
<form id="form" name="form" role="form" method="post" onsubmit="preventEvent()" action="addPost.php">
  <div class="form-group">
    <label>Post Title</label>
    <input id="title" name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea id="body" name="body" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group">
    <label>Month</label>
    <select name="month" class="form-control">
		<?php while($row = $months->fetch_assoc()) : ?>
			<?php if($row['id'] == $post['month']){
				$selected = 'selected';
			} else {
				$selected = '';
			}
			?>	
			<option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
		<?php endwhile; ?>
	</select>
  </div>
  <div>
	  <input name="submit" type="submit" class="btn btn-default" value="Post" onClick="preventEvent()" />
      <script>
      function preventEvent()
      {
          if (document.forms["form"]["title"].value==="") {
              event.preventDefault();
              document.getElementById("title").style.borderColor = "red";
          }
          if (document.forms["form"]["body"].value==="") {
              event.preventDefault();
              document.getElementById("body").style.borderColor = "red";
          }
          if (document.forms["form"]["title"].value!=="") {
              document.getElementById("title").style.borderColor = "initial";
          }
          if (document.forms["form"]["body"].value!=="") {
              document.getElementById("body").style.borderColor = "initial";
          }
      }
      </script>
      <input type="reset" class="btn btn-default" value="Clear" onClick=" return ConfirmDelete()" />
      <script>
          function ConfirmDelete()
          {
              const x = confirm("Are you sure you want to clear the form?");
              if (x)
                  this.form.reset();
              else
                  return false;
          }
      </script>
  </div>
  <br>
</form>
<?php include 'includes/footer.php'; ?>