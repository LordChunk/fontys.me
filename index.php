!DOCTYPE html>
<html>
<head>
	<!-- Je boy Meta taggies -->
	<meta name="description" content="Een mooie website van Fontys klas P14. Gemaakt door: Job van Ooik" />
	<meta name="keywords" content="Fontys, P14, Job van Ooik, van Ooik, OIT, OIS, OIM, Fontys Hogescholen, ICT, Regels, Fontys Regels" />
	<meta name="author" content="metatags generator">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 days">
	<title>Fontys P14 Pagina</title>
	<!-- Fontys P14, Job van Ooik, P14 -->

	<!--Frameworks want fuck al die CSS zelf doen da doe ik bij media wel weer -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://materialize.van-ooik.nl/css/materialize.min.css">
	<!--SweetAlert Import -->
	<script src="swal/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="swal/sweetalert.css">
	<!--Import Jquery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!--Meer framework shit -->
	<script type="text/javascript" src="https://materialize.van-ooik.nl/js/materialize.min.js"></script>


	<!--CSS voor die comic sans shit-->
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
	<div>	
		<!--Navigation bar -->
		<nav>
			<div class="nav-wrapper">
				<a href="#">Wow kijk een fancy site voor regels, super handig! </a>
			</div>
		</nav>
	</div>

	<br>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="col s6">
					<h3>Regels:</h3>
					<ul>
						<li>Aanwezig zijn</li>
						<li>Communicatie aanwezigheid</li>
						<li>Verantwoordelijkheid nemen</li>
						<li>Afstemmen werktijden</li>
						<li>Focus houden</li>
						<li>Gezelligheid is belangrijk!</li>
						<li>Communicatie stand van zaken</li>
						<li>Niet te luidruchtig zijn</li>
						<li>Resecp! (lees: respect)</li>
						<li>Ruim je rotzooi op</li>
						<li>Zorg dat niemand last heeft van gamen</li>
						<li>Geen Comic Sans!</li>
					</ul>
				</div>	
				<div class="col s6">
					<h4>Knaken om mijn hosting te betalen:</h4>
					<ul>
						<li>S&ouml;ren Ottenhof (&#128;	0,01): Hahahahahahaha nice</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row"><div class="col s12">
			<div class="col s6"><h3>Mooie foto's:</h3></div>
			<div class="col s6"><h3>Discord:</h3></div>
		</div></div>
		<div class="row">
			<div class="col s12">
				<div class="col s6">
		        	<ul class="collapsible" data-collapsible="accordion">
						<?php include 'includes/foto_query.inc.php'; ?>
					</ul>
				</div>
				<div class="col s6">
					<iframe src="https://discordapp.com/widget?id=349948995373891585&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
					<br>
					<!--Foto's toevoegen -->
					<div class="input_field card-panel">
						<h5 id="picture-add">Foto's toevoegen:</h5>
						<form action="/includes/foto_add.inc.php" method="POST">
							
							<div class="input-field">	
								<input type="text" id="banner_naam" name="banner_naam" data-length="15">
								<label for="banner_naam">Banner tekst</label>
							</div>
							<div class="input-field">	
								<input type="text" id="foto_url" name="foto_url" data-length="400">
								<label for="foto_url">Direct URL van de foto</label>
							</div>
							<div class="input-field">
								<input type="text" id="tekst" name="tekst" data-length="400">								
								<label for="tekst">Beschrijving</label>
							</div>
							
							<button class="btn waves-effect waves-light" type="submit" name="action">Toevoegen
								<i class="material-icons right">send</i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
    $('.collapsible').collapsible();
    $('input#input_text, textarea#textarea1').characterCounter();

    $("form").submit(function() {
    var isFormValid = true;
    $(".required").each(function() {
        if ($.trim($(this).val()) == "") {
            $(this).addClass("highlight");
            isFormValid = false;
        } else {
            $(this).removeClass("highlight");
        }

    });
});
  });      
</script>
</body>
</html>
