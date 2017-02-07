<span id='score' class="floatleft display">score:<br>0</span>
<span id='tijd' class="floatright display">tijd over:<br>60</span>
<img id="pijl" draggable="false" src=""></img>
<script type="text/javascript">
		var randomnummer = Math.floor(Math.random() * 8) + 1;
		var tijdover = 60;
		var score = -10;
		var swipenaar;
		var vartimer;
		var randomnummer_old;

	function laatpijlzien(){
		switch (randomnummer) {
			case 1:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/blauwe_pijl_links.png');
				swipenaar = "links";
				var randomnummer_old = randomnummer;
				break;
			case 2:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/blauwe_pijl_omhoog.png');
				swipenaar = "omhoog";
				var randomnummer_old = randomnummer;
				break;
			case 3:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/blauwe_pijl_rechts.png');
				swipenaar = "rechts";
				var randomnummer_old = randomnummer;
				break;
			case 4:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/blauwe_pijl_omlaag.png');
				swipenaar = "omlaag";
				var randomnummer_old = randomnummer;
				break;
			case 5:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/rode_pijl_links.png');
				swipenaar = "rechts";
				var randomnummer_old = randomnummer;
				break;
			case 6:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/rode_pijl_omhoog.png');
				swipenaar = "omlaag";
				var randomnummer_old = randomnummer;
				break;
			case 7:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/rode_pijl_rechts.png');
				swipenaar = "links";
				var randomnummer_old = randomnummer;
				break;
			case 8:
				if(randomnummer === randomnummer_old){
					break;
				};
				$('#pijl').attr('src', '../media/rode_pijl_omlaag.png');
				swipenaar = "omhoog";
				var randomnummer_old = randomnummer;
				break;
			default:
		}
		console.log(swipenaar);
		score += 10;
		document.getElementById("score").innerHTML = "score:<br>"+score;
		randomnummer = Math.floor(Math.random() * 8) + 1;
	}

	$(document).ready(function(){
	
	laatpijlzien();
	

	function timer() {
		if (tijdover > 0) {
			tijdover--;
			document.getElementById("tijd").innerHTML = "tijd over:<br>"+tijdover;
		}
		else {
			tijdover = 0;
			clearInterval(vartimer);
			//document.getElementById('save').innerHTML = score;
			window.location.href = "?page=game_over&score="+score;
		}
	}

	vartimer = setInterval(function () {timer()}, 1000);



	$("#pijl").on("swipeleft",function(event){
		$('#pijl').on("swipeleft",function(){
			console.log(swipenaar);
			if(swipenaar == "links"){
				laatpijlzien();
			}
		});
	});

	$("#pijl").on("swiperight",function(event){
		$('#pijl').on("swiperight",function(){
			console.log(swipenaar);
			if(swipenaar == "rechts"){
				laatpijlzien();
			}
		});
	});
	$("#pijl").on("swipedown",function(event){
		$('#pijl').on("swipedown",function(){
			console.log(swipenaar);
			if(swipenaar == "omlaag"){
				laatpijlzien();
			}
		});
	});
	$("#pijl").on("swipeup",function(event){
		$('#pijl').on("swipeup",function(){
			console.log(swipenaar);
			if(swipenaar == "omhoog"){
				laatpijlzien();
			}
		});
	});
});
</script>



<?php 
	
 ?>