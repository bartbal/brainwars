<img class="center" src="../media/uitleg.jpg" width="auto" height="500px">
<?php
	$_SESSION["playername"] = $_POST["naam"];
?>
<script type="text/javascript">
	setTimeout(function(){
    	window.location.href = "?page=spel";
}, 3000);

</script>