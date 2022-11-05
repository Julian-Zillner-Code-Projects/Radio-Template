<?php include "inc/header.php"; ?>
<div id="api_lfm_last_x_songs_spezial">Loading...</div>
<script type="text/html" id="last_x_songs_spezial_template" charset="utf-8"> 
<%= "<b><h1>Letzte Songs</h1></b><br>" %>
<% for (i=0; i < 10; i++) {
if (this[i].type == "song" || this[i].type == "news") {%>
<%= "<p><b>" + this[i].started_at.humanTimeLong() + " - " + this[i].ends_at.humanTimeLong() + " Uhr </b><br />" + this[i].artist.name + " - " + this[i].title + "<br /></br></p>" %>
<% } else { } }%>
</script>
<script type="text/javascript" charset="utf-8">
laut.fm.station('<?php echo "$lautmountpoint"; ?>')
.last_songs({container:'api_lfm_last_x_songs_spezial', template:'last_x_songs_spezial_template'}, true);
</script>
<?php include "inc/footer.php"; ?>