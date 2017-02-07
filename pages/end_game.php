
<h1 class="display">Game over!</h1>

<?php 

	$stmt = $conn->prepare("INSERT INTO score (naam, score) VALUES (:naam, :score)");
	$stmt->bindParam(':naam', $naam);
	$stmt->bindParam(':score', $score);

	$naam = $_SESSION["playername"];
	$score = $_GET['score'];
	$stmt->execute();

	echo "<h2 class=\"display center\" style=\"width:200px;\">Je score is:<br>";
	echo $_GET['score'];
	echo "</h2>";
 ?>
 <br><a class="knop center" href="?page=uitleg">speel opnieuw</a><br>
<a class="knop center" href="?page=highscore">bekijk high score</a>


<script type="text/javascript">
</script>