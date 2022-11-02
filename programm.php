<?php include "inc/header.php"; ?>
	<div class="container">
<div class="card">
  <div class="media">
  		<img src="images/programm/1.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  		<center><h2><?php echo "$programm1"; ?></h2><?php echo "$programmtext1"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/2.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
    <center><h2><?php echo "$programm2"; ?></h2><?php echo "$programmtext2"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/3.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  	<center><h2><?php echo "$programm3"; ?></h2><?php echo "$programmtext3"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/4.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  	<center><h2><?php echo "$programm4"; ?></h2><?php echo "$programmtext4"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/5.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  	<center><h2><?php echo "$programm5"; ?></h2><?php echo "$programmtext5"; ?></center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/6.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  	<center><h2><?php echo "$programm6"; ?></h2><?php echo "$programmtext6"; ?></center>
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