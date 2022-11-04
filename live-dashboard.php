<?php
session_start();
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
  exit();
} ?>
<?php include "inc/header-admin.php"; ?>
<h2>Streaming Info</h2>
<div id="api_lfm_current_song1">Loading...</div>
<script type="text/html" id="current_song_template1" charset="utf-8">
<%= "Aktuelle Song (vom Streamserver abgerufen): <br />" + this.artist.name + " - " + this.title %>
</script> 
<script type="text/javascript" charset="utf-8"> laut.fm.station('<?php echo "$lautmountpoint"; ?>') 
.current_song({container:'api_lfm_current_song1', template:'current_song_template1'}, true);
</script><br>
<div id="api_lfm_song_live">Loading...</div>
<script type="text/html" id="api_lfm_song_live_template" charset="utf-8">
<% if (this.live)  { %>
<%= "Encoder verbunden" %></span>
<% } else { %>
<%= "Encoder getrennt" %>
<% } %>
</script>
<script type="text/javascript" charset="utf-8">
laut.fm.station('<?php echo "$lautmountpoint"; ?>')
.current_song({container:'api_lfm_song_live', template:'api_lfm_song_live_template'}, true);
</script><hr>
<div id="api_lfm_last_x_songs">Loading...</div>
<script type="text/html" id="last_x_songs_template" charset="utf-8"> 
<%= "<b><h2>Letzten Songs</h2></b>" %>
<% for (i=0; i < 10; i++) { %>
<%= "<p>" + this[i].started_at.humanTimeLong() + " - " + this[i].ends_at.humanTimeLong() + " Uhr <br />" + this[i].artist.name + " - " + this[i].title + "<br /></p>" %>
<% } %>
</script>
<script type="text/javascript" charset="utf-8">
laut.fm.station('<?php echo "$lautmountpoint"; ?>')
.last_songs({container:'api_lfm_last_x_songs', template:'last_x_songs_template'}, true);
</script>