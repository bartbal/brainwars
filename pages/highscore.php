<h1 class="display">HIGH SCORE</h1>
<?php 
	$sql = "SELECT naam, score FROM score ORDER BY score DESC";
	$resuld = $conn->query($sql);
?>
<table>
	<tr>
		<th>naam</th>
		<th>score</th>
	</tr>
	<?php  
		foreach ($resuld->fetchAll() as $row) {
			echo "<tr><td>";
			echo $row["naam"];
			echo "</td><td>";
			echo $row["score"];
			echo "</td></tr>";
		}
	?>
</table>

<FORM>
	<INPUT Type="button" class="knop" style="margin: 30px;padding: 20px 50px;" VALUE="Back" onClick="history.go(-1);return true;">
</FORM>