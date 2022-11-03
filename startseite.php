<?php include "inc/header.php"; ?>
	<div class="container">
<div class="card">
  <div class="media">
  		<center><h3>
		<div id="api_lfm_song_live">Loading...</div>
		<script type="text/html" id="api_lfm_song_live_template" charset="utf-8">
		<% if (this.live)  { %>
		<? echo '<img src="images/onair-bild.png'.$file_name.'" width="100%'.$breite.'" height="'.$hoehe.'">'; ?>
		<% } else { %>
		<? echo '<img src="images/offair-bild.png'.$file_name.'" width="100%'.$breite.'" height="'.$hoehe.'">'; ?>
		<% } %>
		</script>
		<script type="text/javascript" charset="utf-8">
			laut.fm.station('<?php echo "$lautmountpoint"; ?>')
				.current_song({container:'api_lfm_song_live', template:'api_lfm_song_live_template'}, true);
		</script></h3></center>
  </div>
  <div class="content">
  		<center><div id="api_lfm_current_playlists">Loading...</div>
			<script type="text/html" id="current_playlists_template" charset="utf-8">
				<%= "<b><h1>Aktuelle Sendung:</h1> </b>" + this.current_playlist.started_at.humanTimeShort() + " - " + this.current_playlist.ends_at.humanTimeShort() + " Uhr <br /> <b>Du H&ouml;rst: </b>" + this.current_playlist.name %>
				</script>
			<script type="text/javascript" charset="utf-8">
				laut.fm.station('<?php echo "$lautmountpoint"; ?>')
				.info({container:'api_lfm_current_playlists', template:'current_playlists_template'}, true);
			</script>
			
			</center>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/2.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
    <p><center><div id="api_lfm_next_playlists">Loading...</div>
			<script type="text/html" id="next_playlists_template" charset="utf-8">
			<h1>Nachdem gehts weiter:</h1>
			<%= "<b>N&auml;chste Sendung: </b>" + this.next_playlist.started_at.humanTimeShort() + " - " + this.next_playlist.ends_at.humanTimeShort() + " Uhr <br /> <b>Dann H&ouml;rst du: </b>" + this.next_playlist.name%>
			</script>
			<script type="text/javascript" charset="utf-8">
				laut.fm.station('<?php echo "$lautmountpoint"; ?>')
					.info({container:'api_lfm_next_playlists', template:'next_playlists_template'}, true);
			</script></center></p>
  </div>
</div>
<div class="card">
  <div class="media">
  	<img src="images/programm/3.jpg" width="300" height="150" alt="">
  </div>
  <div class="content">
  	<h1><?php echo "$titelbox"; ?></h1>
    <p><?php echo "$titeltext"; ?></p>
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