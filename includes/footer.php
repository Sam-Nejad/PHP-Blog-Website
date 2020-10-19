        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
			<?php if($months) : ?>
              <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Months
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<?php while($row = $months->fetch_assoc()) : ?>
					<a class="dropdown-item"  href="dropdown.php?month=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
				<?php endwhile; ?>
                  </div>
              </div>
			<?php else : ?>
				<p>There are no months yet</p>
			<?php endif; ?>
        </div>
      </div>
    </div>
        <script src="js/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>