<?php include "inc/header.php"; ?>
<h1>Team</h1>
<div class="container">
<div class="card">
  <div class="media">
  		<img src="images/team/1.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  		<center><h2><?php echo "$moderator1"; ?></h2><?php echo "$moderatorinfo1"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/team/2.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
    <center><h2><?php echo "$moderator2"; ?></h2><?php echo "$moderatorinfo2"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/team/3.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  	<center><h2><?php echo "$moderator3"; ?></h2><?php echo "$moderatorinfo3"; ?></center>
  </div>
</div>
</div>
<style>
<style>

	:root {
		--card-margin: 1em;
	}
	body {
		line-height: 150%;
	}
	img {
	  width: 100%;
	  height: 100%;
	  object-fit: cover;
	  display: block;
	}
	.container {
		display: flex;
		flex-wrap: wrap;
	}
	.container > * {
		flex: 1 1 calc(280px + var(--card-margin));
		width: 100%;
	}
	.card {
	  display: flex;
	  flex-wrap: wrap;
	  background: silver;
	  margin: var(--card-margin);
	}
	.card > * {
	  flex: 1 1 280px;
	}

	.content {
		align-self: center;
		padding: 1em 2em;
	}
</style>
</style>
<?php include "inc/footer.php"; ?>
